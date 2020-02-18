<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\Cookie;
use App\Http\Controllers\Auth\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    /*
     * Where to redirect users after login.
     *
     * @var string
     */
    /*
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    } 
    */


    protected function sendLoginResponse(Request $request)
    {
    $request->session()->regenerate();

    $this->clearLoginAttempts($request);

    return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }

  
 
 
     public function login(Request $request) {
 
        

 
         $new = $this->validateLogin($request);
         

 
         alert('Login','Successfully Logged In!', 'success')->autoClose(2000)->timerProgressBar(5);
 
         //toast('Successfully Logged In!','success')->autoClose(5000);
     
         // If the class is using the ThrottlesLogins trait, we can automatically throttle
         // the login attempts for this application. We'll key this by the username and
         // the IP address of the client making these requests into this application.
         if ($this->hasTooManyLoginAttempts($request)) {
             $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
         }
     
         // This section is the only change
         if ($this->guard()->validate($this->credentials($request))) {
             $user = $this->guard()->getLastAttempted();
     
             // Make sure the user is active
             if ($user->status && $this->attemptLogin($request)) {
                 // Send the normal successful login response
                 return $this->sendLoginResponse($request);
             } else {
                 // Increment the failed login attempts and redirect back to the
                 // login form with an error message.

                

                 $this->incrementLoginAttempts($request);
                 return redirect()
                     ->back()
                     ->withInput($request->only($this->username(), 'remember'))
                     ->withErrors([$this->username() => 'You must be active to login.']);
             }
 
         }


     
         // If the login attempt was unsuccessful we will increment the number of attempts
         // to login and redirect the user back to the login form. Of course, when this
         // user surpasses their maximum number of attempts they will get locked out.
         $this->incrementLoginAttempts($request);
         return $this->sendFailedLoginResponse($request);
    
 
 
         return redirect()->intended();

         
     }
 
     public function logout(Request $request) {
        alert('Logout','Successfully Logged Out!', 'success')->autoClose(2000)->timerProgressBar(5);
        Auth::logout();
        return redirect('/');
      }
    


}
