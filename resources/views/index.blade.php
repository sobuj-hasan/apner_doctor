@extends('layouts.app')
@section('title', 'Home')
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
            <div class="col-lg-12 col-sm-6">
               <div class="sec-5-box">
               <div class="sec-5imgdgn d-flex">
                  <img src="img/hospital/hos1.png" alt="">
                  <img src="img/hospital/h2.jpg" alt="">
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
                  <img src="img/hospital/hos1.png" alt="">
                  <img src="img/hospital/h2.jpg" alt="">
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
      <!-- sec-6 start -->
      <div class="sec-6">
         <div class="container">
         <div class="row">
            <h2>DOCTOR</h2>
            <div class="col-lg-6 col-sm-6">
               <div class="srvcbox">
               <div class="s6imgdesign d-flex">
                  <img src="img/doctor/d1.png" alt="">
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
                  <img src="img/doctor/d2.png" alt="">
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
                  <img src="img/doctor/d3.png" alt="">
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
                  <img src="img/doctor/d4.png" alt="">
               </div>
               <h3>Nutritionist Aysha Siddika</h3>
               <h5>Contact Number: demo123456789</h5>
               <p>BSc & MSc (Food & Nutrition, DU)</p>
               <h5>Nutritionist (Food, Diet, Weight Management) & Dietitian</h5>
               <p>Japan Bangladesh Friendship Hospital</p>
               </div>
            </div>
         </div>
         </div>
         <!-- sec-6 end -->
@endsection











