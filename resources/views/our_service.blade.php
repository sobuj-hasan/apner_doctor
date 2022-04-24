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
          @foreach ($hospitals as $hospital)
               <div class="col-lg-12 col-sm-6">
                  <div class="sec-5-box">
                  <div class="sec-5imgdgn d-flex">
                     <img src="{{ asset('assets/img') }}/{{ $hospital->image }}" alt="">
                     <img src="{{ asset('assets/img') }}/{{ $hospital->image_two }}" alt="">
                  </div>
                  <h3><span>Hospital Name:</span> {{ $hospital->hospital_name }}</h3>
                  <h3><span>Phone-Number:</span> {{ $hospital->phone }}</h3>
                  <h3><span>Hospital Address:</span> {{ $hospital->address }}</h3>
                  >
                  <p><span>Hospital Details:</span>{{ $hospital->description }}</p>
                  </div>
               </div>
            @endforeach
        </div>
      </div>
    </div>
    <!-- sec-5 end -->
@endsection


