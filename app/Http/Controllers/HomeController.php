<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Charts\PropertyChart;
use App\PropertyListing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = DB::table('users')->get();

        $housing = PropertyListing::select(\DB::raw("COUNT(*) as count"))
        ->where('property_type','=','Housing')
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $condominium = PropertyListing::select(\DB::raw("COUNT(*) as count"))
        ->where('property_type','=','Condominium')
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $apartment = PropertyListing::select(\DB::raw("COUNT(*) as count"))
        ->where('property_type','=','Apartment')
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $hotels = PropertyListing::select(\DB::raw("COUNT(*) as count"))
        ->where('property_type','=','Hotels')
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

       

        $chart = new PropertyChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $chart->dataset('Hotel', 'line', $housing)->options([
            'fill' => 'true',
            'borderColor' => '#0000ff'
        ]);
        $chart->dataset('Condominum', 'line', $condominium)->options([
            'fill' => 'true',
            'borderColor' => '#ff0000'
            ]);
        $chart->dataset('Apartment', 'line', $apartment)->options([
                'fill' => 'true',
                'borderColor' => '#00FF00'
                ]);
        $chart->dataset('Hotels', 'line', $hotels)->options([
                    'fill' => 'true',
                    'borderColor' => '#ffa500'
                    ]);




        return view('home',compact('users','chart'));

       

    }
}
