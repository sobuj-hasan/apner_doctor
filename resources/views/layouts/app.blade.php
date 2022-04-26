<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Apner Doctor</title>
  <!-- css link -->
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- sec-1 start -->
    <div class="sec-1">
        <div class="row">
        <div class="col-lg-12">
            <div class="sec-1-design">
            <div class="sec-1box">
                <img src="{{ asset('img/logo/apner doctor.png') }}" alt="">
            </div>
            <div class="menudesign">
                <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('our.doctor') }}">Our-Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hospital.service') }}">Hospital</a>
                        </li>

                        @if (Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                            </li>
                        @else
                            <li>
                                @if (Auth::user()->role == 1)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                    </li>
                                @elseif(Auth::user()->role == 2)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                    </li>
                                @endif
                            </li>
                        @endif
                    </ul>
                    </div>
                </div>
                </nav>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- sec-1 end -->




    @yield('content')

    <!--  marque design start -->
      <div class="mrqdesign">
        <div class="row">
          <div class="col-lg-12">
            <marquee behavior="" direction="" scrollamount="8">
              <h6>Helping you to find your Doctor, Diagnostic Center or Hospital</h6>
            </marquee>
          </div>
        </div>
      </div>
      <!--  marque design end -->
      <!-- footer end -->
      <div class="lst">
        <h6>All right reserved @apnardoctor22.com</h6>
      </div>
      <!-- bdyclrdesign end -->
    </div>
    <!-- js link -->
    <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>


