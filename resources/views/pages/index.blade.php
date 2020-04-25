@extends('layouts.app') @section('content')

<div id="tcard" class="jumbotron text-center  text-white mt-5">
    <h1> Blog Spot  </h1>
    <p>Where People Come Together To Connect </p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/second.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/third.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

@endsection