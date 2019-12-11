@extends('layout.default')
@section('content')
  <link rel="stylesheet" href="web/css/acceuil.css">
  @include('layout._navAcceuil')
  <marquee><h3>BIEVENUE A AGBAOU</h3></marquee>
  <div id="carouselExamp4eFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="web/images/2.jpg" class="d-block w-100" alt="1">
      </div>
      <div class="carousel-item">
        <img src="web/images/3.jpg" class="d-block w-100" alt="2">

      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
