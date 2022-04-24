@extends('layouts.app')
@section('title', 'Home')
@section('content')
   <!-- sector start -->
   <div class="sector">
      <div class="container">
         <div class="row">
         <div class="col-lg-12">
            <form method="GET" action="{{ route('search.result') }}">
            <div class="sectorbox d-flex">
                  @csrf
                  <div class="sbox">
                     <select class="form-select mt-1 fw-bold" aria-label="Default select example" name="category_id">
                        <option selected>Select Doctor Category</option>
                        @foreach ($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="sbox">
                     <nav class="navbar navbar-light">
                        <div class="container-fluid">
                           <div class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="given_data">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                           </div>
                        </div>
                     </nav>
                  </div>
               </form>
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
   <!-- sec-2 start -->
   <div class="sec-2">
      <div class="row">
         <div class="col-lg-12">
         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
               <img src="img/Sliderbnr/bnr-1.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
               <img src="img/Sliderbnr/bnr2.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
               <img src="img/Sliderbnr/bnr3.png" class="d-block w-100" alt="...">
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
      <!-- sec-4 start -->
      <div class="sec-4">
         <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="sec-4-box-1">
               <h4>Helping you to find your Doctor, Diagnostic Center or Hospital</h4>
               <h5>
                  ধন্যবাদ সবাইকে <span>apnardoctor22.com</span> (আপনার ডাক্তার) সাইটে ভিজিট করার জন্য।
                  এই ওয়েবসাইটে আপনারা নিজ নিজ অসুখ অনুযায়ি প্রয়োজনীয় ডাক্তার, হাসপাতাল বা ডায়াগনস্টিক সেন্টার খুঁজে পাবেন
                  সহজেই,
                  আপনাদের এলাকায় বা দেশের যে কোন যায়গায়। আমাদের সাথে কোন ডাক্তার, হাসপাতাল বা ডায়াগনস্টিক সেন্টারের কোন
                  অ্যাফিলিয়েশন নাই।
                  এখানে দেওয়া তথ্যর ভিত্তিতে আপনারা স্বাধীন ভাবে আপনার পছন্দ মত ডাক্তার বা হসপিটালের সাথে যোগাযোগ করতে
                  পারবেন।
                  ইনশা-আল্লাহ আপনাদের অনুসন্ধান সহজ হবে এবং দ্রুত একজন ডাক্তারের সাথে যোগাযোগ করতে পারবেন। ২৪ ঘণ্টা এই
                  <span>apnardoctor22.com </span> ব্যবহার করে তথ্য অনুসন্ধান করতে পারবেন।
               </h5>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="sec-4-box-1">
               <h4>এই ওয়েবসাইট www.apnardoctor22.com যেভাবে ব্যাবহার/অনুসন্ধান করবেনঃ</h4>
               <h5>
                  ১। প্রথমে আপনার এলাকা (কুমিল্লা বা সিলেট) সিলেক্ট করুন <br>
                  ২। এরপর ক্যাটেগরি সিলেক্ট করুন (যেমন ডেন্টিস্ট বা গাইনি বা ) <br>
                  ৩। এরপর অনুসন্ধান করুন ডাক্তার বা ডায়াগ্নস্টিক বা হসপিটাল।
               </h5>
               </div>
            </div>
         </div>
         </div>
      </div>
      <!-- sec-4 end -->
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
         </div>
         </div>
         <!-- sec-6 end -->
@endsection











