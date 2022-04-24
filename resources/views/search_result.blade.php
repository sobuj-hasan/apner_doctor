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
              <form method="POST" action="{{ route('form.submit') }}">
                  @csrf
                  <div class="popup" id="popup-1">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="togglepopup()">&times;</div>
                        <h1>You Can Send Your Message here</h1>
                        <label for="">Your Name</label>
                        <input type="text" placeholder="Enter Your Name" name="name" required>
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="">Mobile Number</label>
                        <input type="text" placeholder="Enter Mobile Number" name="phone" required>
                        @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="">Mail</label>
                        <input type="text" placeholder="Enter Your Name" name="email" required>
                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="">Your Message</label>
                        <textarea style="width: 100%;" id="" cols="30" rows="10" placeholder="Enter Your Message Here" name="message"></textarea>
                        @error('message')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <button type="submit">Send</button>
                    </div>
                  </div>
              </form>
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
  <!-- bdyclrdesign -->
  <div class="bdyclrdesign">
    <!-- bdyclrdesign -->
    <!-- sec-6 start -->
    <div class="sec-6">
      <div class="container">
        <div class="row">
          <h2>DOCTOR</h2>
          @foreach ($doctors as $doctor)
            <div class="col-lg-6 col-sm-6">
                <div class="srvcbox">
                <div class="s6imgdesign d-flex">
                    <img src="{{ asset('assets/img') }}/{{ $doctor->image }}" alt="">
                </div>
                <h3>{{ $doctor->doctor_name }}</h3>
                <h5>Contact Number: {{ $doctor->contact_number }}</h5>
                <p>{{ $doctor->degree }}</p>
                <h5>{{ $doctor->education }}</h5>
                <p>{{ $doctor->working_hospital }}</p>
                </div>
            </div>
        @endforeach
@endsection


