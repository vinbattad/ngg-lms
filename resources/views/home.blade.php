@extends('layouts.app')

@section('content')


<h2 style="color:#008349;">   <i class="fa fa-project-diagram"></i> Dashboard</h2>
<hr>

<div class="fas-icon">

    <!--
<div class="row mb-1">
    <div class="col col-xs-3 p-3 m-2 bg-primary text-white"><i class="fas fa-user"></i> Users
    <hr>
Total</div>
    <div class="col col-xs-3 p-3 m-2 bg-primary text-white"><i class="fas fa-user"></i></div>
    <div class="col col-xs-3 p-3 m-2 bg-primary text-white"><i class="fas fa-user"></i></div>
    <div class="col col-xs-3 p-3 m-2 bg-primary text-white"><i class="fas fa-user"></i></div>
</div>
-->






<div class="row">
    <div class="col-lg-3 mb-2">
        <div class="text-dark p-2"><i class="fas fa-hotel"></i> <strong>HOTELS</strong></div>
        <div class="img-fluid">
        <img src="{{url("img/hotel.jpg")}}" class="img-responsive fit-image" alt="Hotel">
        </div>
        <a class="btn btn-outline-primary btn-block">More Details</a>
    </div>
    <div class="col-lg-3 mb-2">
        <div class="text-dark p-2"><i class="fas fa-building"></i> <strong>APARTMENT</strong></div>
        <div class="img-fluid">
        <img src="{{url("img/apartment.jpg")}}" class="img-responsive fit-image" alt="Hotel">
        </div>
        <a class="btn btn-outline-primary btn-block">More Details</a>
    </div>
    <div class="col-lg-3 mb-2">
        <div class="text-dark p-2"><i class="fas fa-home"></i> <strong>HOUSE</strong></div>
        <div class="img-fluid">
        <img src="{{url("img/house.jpg")}}" class="img-responsive fit-image" alt="Hotel">
        </div>
        <a class="btn btn-outline-primary btn-block">More Details</a>
    </div>
    <div class="col-lg-3 mb-2">
        <div class="text-dark p-2"><i class="fas fa-city"></i>  <strong>CONDOMINIUM</strong></div>
        <div class="img-fluid">
        <img src="{{url("img/condominium.jpg")}}" class="img-responsive fit-image" alt="Hotel">
        </div>
        <a class="btn btn-outline-primary btn-block">More Details</a>
    </div>
</div>

</div>






@endsection
