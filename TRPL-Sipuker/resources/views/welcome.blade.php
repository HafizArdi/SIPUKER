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
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item disabled" role="presentation" href="/login" style="color:rgb(0,0,0);">LogIn</a><a class="dropdown-item" role="presentation" href="/register" style="color:rgb(8,8,8);">SignUp</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info" style="color:rgb(0,0,0);height:60px;">Features</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box">
                    <h4 style="color:rgb(23,162,184);"><img src="assets/img/features/wallet.png" style="width:60px;/*left:20px;*/">&nbsp; Peminjaman Modal</h4>
                    <p class="text-justify" style="color:rgb(0,0,0);margin-left:70px;">Pada Fitur ini UMKM dapat mengajukan peminjaman&nbsp;dana kepada Pemerintah dengan&nbsp;ketentuan dan syarat yang berlaku</p>
                </div>
                <div class="col-md-5 feature-box" style="margin-left:80px;">
                    <h4 style="color:rgb(31,164,185);"><img src="assets/img/features/activity.png" style="width:70px;">&nbsp; Kegiatan UMKM</h4>
                    <p class="text-justify" style="color:rgb(0,0,0);margin-left:80px;">Fitur ini digunakan untuk melihat kegiatan-kegiatan UMKM yang akan diadakan oleh Pemerintah dan user dapat bergabung dengan kegiatan tersebut</p>
                </div>
                <div class="col-md-5 feature-box" style="/*margin-left:-80px;*/">
                    <h4 style="color:rgb(75,176,193);"><img src="assets/img/features/forum.png" style="width:70px;">&nbsp; Forum Diskusi</h4>
                    <p style="color:rgb(0,0,0);margin-left:70px;">User dapat berdiskusi dengan user lainnya untuk membahas suatu masalah atau meningkatkan keakraban antar UMKM</p>
                </div>
                <div class="col-md-5 feature-box" style="margin-left:80px;">
                    <h4 style="color:rgb(39,166,187);"><img src="assets/img/features/laporan.png" style="width:80px;">&nbsp; Laporan Kegiatan</h4>
                    <p class="text-justify" style="color:rgb(0,0,0);margin-left:80px;">UMKM yang terdaftar wajib melakukan laporan kegiatan setiap bulannya sebagai bentuk pertanggung jawabanya kepada pemerintah</p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block about-us" style="padding-bottom:60px;margin-left:200px;">
        <div class="container" style="/*margin-left:100px;*/">
            <div class="block-heading">
                <h2 class="text-info" style="height:80px;margin-top:40px;">About Us</h2>
            </div>
            <div class="row justify-content-center" style="/*margin-left:-10px;*/">
                <div class="col-sm-6 col-lg-4" style="/*height:20px;*/margin-left:70px;/*width:20px;*//*border:1px black;*/"><img class="align-items-center" src="assets/img/About/hafiz.png" style="margin-left:20px;width:100px;">
                    <h4 style="margin-top:30px;">Hafiz Ardi</h4>
                    <p>&nbsp; &nbsp; &nbsp;Designer</p>
                    <div class="icons" style="/*margin-right:10px;*/"><a href="#" style="margin-left:20px;"><i class="icon-social-facebook"></i></a><a href="#" style="margin-left:5px;"><i class="icon-social-instagram"></i></a><a href="#" style="margin-left:9px;"><i class="icon-social-twitter"></i></a></div>
                </div>
                <div class="col-sm-6 col-lg-4" style="margin-left:-150px;"><img src="assets/img/About/ita.png" style="margin-left:20px;width:100px;">
                    <h4 style="margin-top:30px;">Ita Sugiharti</h4>
                    <p>&nbsp; Project Manager&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tester</p>
                    <div class="icons"><a href="#"><i class="icon-social-facebook" style="margin-left:30px;"></i></a><a href="#" style="margin-left:5px;"><i class="icon-social-instagram" style="/*margin-left:5px;*/"></i></a><a href="#" style="margin-left:9px;"><i class="icon-social-twitter"></i></a></div>
                </div>
                <div class="col-sm-6 col-lg-4" style="margin-left:-150px;"><img src="assets/img/About/putri.png" style="margin-left:25px;width:100px;">
                    <h4 style="margin-top:30px;">Putri Kharisma</h4>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Analis</p>
                    <div class="icons"><a href="#"><i class="icon-social-facebook" style="margin-left:35px;"></i></a><a href="#" style="margin-left:5px;"><i class="icon-social-instagram"></i></a><a href="#" style="margin-left:9px;"><i class="icon-social-twitter"></i></a></div>
                </div>
                <div class="col-sm-6 col-lg-4" style="margin-left:-150px;"><img src="assets/img/About/ojik.png" style="margin-left:20px;width:100px;">
                    <h4 style="margin-top:30px;">Ahmad Fauzi</h4>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp;Programer</p>
                    <div class="icons"><a href="#"><i class="icon-social-facebook" style="margin-left:35px;"></i></a><a href="#" style="margin-left:5px;"><i class="icon-social-instagram"></i></a><a href="#" style="margin-left:9px;"><i class="icon-social-twitter"></i></a></div>
                </div>
            </div>
        </div>
    </section>
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
