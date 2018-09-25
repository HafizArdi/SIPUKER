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
    <div class="container">
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action="javascript:void();" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden"
                                name="to" value="email@mywebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="modal-successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6" id="modal-message">
                                    <fieldset>
                                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                    </fieldset>
                                    <div class="form-group has-feedback"><label for="modal_from_name">Name</label><input class="form-control" type="text" name="from_name" required="" placeholder="Full Name" id="modal_from_name" tabindex="-1"></div>
                                    <div class="form-group has-feedback"><label for="modal_from_email">Email</label><input class="form-control" type="email" name="from_email" required="" placeholder="Email Address" id="modal_from_email"></div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback"><label for="modal_from_phone">Phone</label><input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="modal_from_phone"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="modal_calltime">Best Time to Call</label><select class="form-control" name="Call Time" id="modal_calltime"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="modal_comments">Comments</label><textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="modal_comments"></textarea></div>
                                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                                    </fieldset>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="static-map"><a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Washington Monument"></a></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                            </fieldset>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@address.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                                            </fieldset>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr.</span></div>
                                            <div><span>Daytona Beach, FL 81500</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="javascript:void();" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden" name="to"
                value="email@mywebsite.com">
            <div class="form-row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6" id="message">
                    <fieldset>
                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                    </fieldset>
                    <div class="form-group has-feedback"><label for="from_name">Name</label><input class="form-control" type="text" name="from_name" required="" placeholder="Full Name" id="from_name" tabindex="-1"></div>
                    <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" name="from_email" required="" placeholder="Email Address" id="from_email"></div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback"><label for="from_phone">Phone</label><input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="from_phone"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="calltime">Best Time to Call</label><select class="form-control" name="Call Time" id="calltime"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                        </div>
                    </div>
                    <div class="form-group"><label for="comments">Comments</label><textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="comments"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                    <hr>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                    </fieldset>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="static-map"><a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Washington Monument"></a></div>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                            </fieldset>
                            <div><span><strong>Name</strong></span></div>
                            <div><span>email@address.com</span></div>
                            <div><span>www.awebsite.com</span></div>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                            </fieldset>
                            <div><span><strong>Office Name</strong></span></div>
                            <div><span>55 Icannot Dr.</span></div>
                            <div><span>Daytona Beach, FL 81500</span></div>
                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
