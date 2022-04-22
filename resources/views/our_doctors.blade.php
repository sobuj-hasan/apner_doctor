@extends('layouts.app')
@section('title', 'Our Doctor')
@section('content')
   <!-- sector start -->
  <div class="sector">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sectorbox d-flex">
            <div class="sbox">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Location
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Dhaka</a></li>
                  <li><a class="dropdown-item" href="#">Cumilla</a></li>
                  <li><a class="dropdown-item" href="#">Sylhet</a></li>
                  <li><a class="dropdown-item" href="#">Dhaka</a></li>
                  <li><a class="dropdown-item" href="#">Cumilla</a></li>
                  <li><a class="dropdown-item" href="#">Sylhet</a></li>
                </ul>
              </div>
            </div>
            <div class="sbox">
              <nav class="navbar navbar-light">
                <div class="container-fluid">
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </nav>
            </div>
            <div class="sbox">
              <div class="popup" id="popup-1">
                <div class="overlay"></div>
                <div class="content">
                  <div class="close-btn" onclick="togglepopup()">&times;</div>
                  <h1>You Can Send Your Message here</h1>
                  <label for="">Your Name</label>
                  <input type="text" placeholder="Enter Your Name">
                  <label for="">Mobile Number</label>
                  <input type="text" placeholder="Enter Mobile Number">
                  <label for="">Mail</label>
                  <input type="text" placeholder="Enter Your Name">
                  <label for="">Your Message</label>
                  <textarea name="" id="" cols="30" rows="10" placeholder="Enter Your Message Here"></textarea>
                  <button>Send</button>
                </div>
              </div>
              <button onclick="togglepopup()">
                <h3>CONTACT</h3>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- sector end -->
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
    <!-- sec-6 start -->
    <div class="sec-6">
      <div class="container">
        <div class="row">
          <h2>DOCTOR</h2>
          <div class="col-lg-6 col-sm-6">
            <div class="srvcbox">
              <div class="s6imgdesign d-flex">
                <img src="{{ asset('img/doctor/d1.png') }}" alt="">
              </div>
              <h3>Nutritionist Aysha Siddika</h3>
              <h5>Contact Number: demo123456789</h5>
              <p>BSc & MSc (Food & Nutrition, DU)</p>
              <h5>Nutritionist (Food, Diet, Weight Management) & Dietitian</h5>
              <p>Japan Bangladesh Friendship Hospital</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="srvcbox">
              <div class="s6imgdesign d-flex">
                <img src="{{ asset('img/doctor/d2.png') }}" alt="">
              </div>
              <h3>Nutritionist Aysha Siddika</h3>
              <h5>Contact Number: demo123456789</h5>
              <p>BSc & MSc (Food & Nutrition, DU)</p>
              <h5>Nutritionist (Food, Diet, Weight Management) & Dietitian</h5>
              <p>Japan Bangladesh Friendship Hospital</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="srvcbox">
              <div class="s6imgdesign d-flex">
                <img src="{{ asset('img/doctor/d3.png') }}" alt="">
              </div>
              <h3>Nutritionist Aysha Siddika</h3>
              <h5>Contact Number: demo123456789</h5>
              <p>BSc & MSc (Food & Nutrition, DU)</p>
              <h5>Nutritionist (Food, Diet, Weight Management) & Dietitian</h5>
              <p>Japan Bangladesh Friendship Hospital</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="srvcbox">
              <div class="s6imgdesign d-flex">
                <img src="{{ asset('img/doctor/d4.png') }}" alt="">
              </div>
              <h3>Nutritionist Aysha Siddika</h3>
              <h5>Contact Number: demo123456789</h5>
              <p>BSc & MSc (Food & Nutrition, DU)</p>
              <h5>Nutritionist (Food, Diet, Weight Management) & Dietitian</h5>
              <p>Japan Bangladesh Friendship Hospital</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="srvcbox">
              <div class="s6imgdesign d-flex">
                <img src="{{ asset('img/doctor/d3.png') }}" alt="">
              </div>
              <h3>Nutritionist Aysha Siddika</h3>
              <h5>Contact Number: demo123456789</h5>
              <p>BSc & MSc (Food & Nutrition, DU)</p>
              <h5>Nutritionist (Food, Diet, Weight Management) & Dietitian</h5>
              <p>Japan Bangladesh Friendship Hospital</p>
            </div>
          </div>
@endsection


