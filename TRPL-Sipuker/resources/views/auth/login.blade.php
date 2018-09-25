<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sipuker</title>

  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/simple-line-icons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/aguilaraldo1_section_contact.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/Footer-Dark.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/Login-Form-Clean.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/Navigation-with-Search.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/Simple-Slider.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgb(178,225,230);">
    <div class="container"><a class="navbar-brand" href="#" style="/*margin-left:50px;*/"><img src="assets/img/logo/logo.png" style="width:70px;margin-left:100px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div
      class="collapse navbar-collapse" id="navcol-1" style="margin-left:180px;">
      <ul class="nav navbar-nav">
        <li class="nav-item" role="presentation"><a class="nav-link" href="awal.html" style="color:rgb(6,6,6);font-weight:bold;font-size:18px;">Home</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(6,6,6);font-weight:bold;font-size:18px;">Activity</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(6,6,6);font-weight:bold;font-size:18px;">Features</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(0,0,0);font-weight:bold;font-size:18px;">About Us</a></li>
        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="font-weight:bold;font-size:18px;color:rgb(0,0,0);margin-left:130px;">Akun</a>
          <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="login.html" style="color:rgb(0,0,0);">LogIn</a><a class="dropdown-item" role="presentation" href="signUp.html" style="color:rgb(0,0,0);">SignUp</a></div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="login-clean">
  <form method="post" action="{{ route('login') }}">
    {{csrf_field()}}
    <h2 class="sr-only">Login Form</h2>
    <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
    <div class="form-group"><input class="btn btn-primary btn-block" type="submit">Log In</input></div><a href="#" class="forgot">Forgot your email or password?</a></form>
  </div>
  <div class="footer-dark" style="background-color:rgb(178,225,230);">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3 style="color:rgb(0,0,0);">Services</h3>
            <ul>
              <li><a href="#" style="color:rgb(0,0,0);">Web design</a></li>
              <li><a href="#" style="color:rgb(0,0,0);">Development</a></li>
              <li><a href="#" style="color:rgb(0,0,0);">Hosting</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3 style="color:rgb(0,0,0);">About</h3>
            <ul>
              <li><a href="#" style="color:rgb(0,0,0);">Company</a></li>
              <li><a href="#" style="color:rgb(0,0,0);">Team</a></li>
              <li><a href="#" style="color:rgb(0,0,0);">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3 style="color:rgb(0,0,0);">Company Name</h3>
            <p style="color:rgb(0,0,0);">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
          </div>
          <div class="col item social"><a href="#" style="background-color:#000000;"><i class="icon ion-social-facebook"></i></a><a href="#" style="background-color:#000000;"><i class="icon ion-social-twitter"></i></a><a href="#" style="background-color:#000000;"><i class="icon ion-social-snapchat"></i></a>
            <a
            href="#" style="background-color:#000000;"><i class="icon ion-social-instagram"></i></a>
          </div>
        </div>
        <p class="copyright">Company Name © 2017</p>
      </div>
    </footer>
  </div>
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
  <script src="{{ asset('assets/js/Simple-Slider.js')}}"></script>
</body>

</html>
