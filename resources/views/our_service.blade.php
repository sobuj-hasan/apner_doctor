@extends('layouts.app')
@section('title', 'Our Hospitals')
@section('content')
    <!-- sec-2 start -->
  <div class="sec-2">
    <div class="row">
      <div class="col-lg-12">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/Sliderbnr/bnr-1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/Sliderbnr/bnr2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/Sliderbnr/bnr3.png') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- sec-2 end -->
  <!-- bdyclrdesign -->
  <div class="bdyclrdesign">
    <!-- bdyclrdesign -->
    <!-- sec-5 start -->
    <div class="sec-5">
      <div class="container">
        <div class="row">
          <h2>HOSPITAL</h2>
          <div class="col-lg-12 col-sm-6">
            <div class="sec-5-box">
              <div class="sec-5imgdgn d-flex">
                <img src="{{ asset('img/hospital/hos1.png') }}" alt="">
                <img src="{{ asset('img/hospital/h2.jpg') }}" alt="">
              </div>
              <h3><span>Hospital Name:</span> Demo Hospital</h3>
              <h3><span>Phone-Number:</span> Demo123456789</h3>
              <h3><span>Hospital Address:</span> Demo Location</h3>
              >
              <p><span>Hospital Details:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, enim?
                Quis, repellat architecto! Praesentium consequuntur reiciendis dicta aliquid est. Impedit consectetur
                esse veritatis facilis iste excepturi architecto deserunt reprehenderit temporibus nemo! Dolore magni
                mollitia nemo, recusandae eaque, molestias quo incidunt assumenda expedita corporis nulla! Fuga delectus
                mollitia natus architecto ea. </p>
            </div>
          </div>
          <div class="col-lg-12 col-sm-6">
            <div class="sec-5-box">
              <div class="sec-5imgdgn d-flex">
                <img src="{{ asset('img/hospital/hos1.png') }}" alt="">
                <img src="{{ asset('img/hospital/h2.jpg') }}" alt="">
              </div>
              <h3><span>Hospital Name:</span> Demo Hospital</h3>
              <h3><span>Phone-Number:</span> Demo123456789</h3>
              <h3><span>Hospital Address:</span> Demo Location</h3>
              >
              <p><span>Hospital Details:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, enim?
                Quis, repellat architecto! Praesentium consequuntur reiciendis dicta aliquid est. Impedit consectetur
                esse veritatis facilis iste excepturi architecto deserunt reprehenderit temporibus nemo! Dolore magni
                mollitia nemo, recusandae eaque, molestias quo incidunt assumenda expedita corporis nulla! Fuga delectus
                mollitia natus architecto ea. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sec-5 end -->
@endsection


