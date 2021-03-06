<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sipuker</title>
  <link rel="stylesheet" href="{{asset ('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/fonts/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/fonts/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/fonts/simple-line-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/aguilaraldo1_section_contact.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Footer-Dark.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
  <link rel="stylesheet" href="{{asset ('assets/css/Login-Form-Clean.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Navigation-with-Search.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Simple-Slider.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/styles.css')}}">
</head>

<body>
  @include('layouts/pemerintah-header', ['user' => $user])
  <div class="jumbotron">
    <div class="row" style="height:250px;">
      <div class="col"><img src="{{asset('assets/img/iconAkun.png')}}" style="width:140px;margin-left:580px;"></div>
    </div>
    <div class="row">
      <div class="col" style="margin-left:100px;background-color:rgba(251,251,251,0.78);">
        <div>
          <div class="container-fluid">
            <h1>Account Information</h1>
            <hr>
            <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
              type="hidden" name="to" value="email@awebsite.com">
              <div class="form-row">
                <div class="col-md-6">
                  <div id="successfail"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 col-md-6" id="message">
                  <div class="form-group" style="margin-left:100px;"><label for="from-name">Name</label><span class="required-input">*</span><div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input type="text" name="name" value="{{ $user->name }}" class="form-control" id="from-name" /></div></div>
                    <div class="form-group" style="/*width:100px;*/margin-left:100px;"><label for="from-email">Email</label><span class="required-input">*</span><div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input type="text" name="email" value="{{ $user->email }}" class="form-control" id="from-email" /></div></div>
                      <div class="form-group" style="/*width:100px;*/margin-left:100px;"><label for="from-email">Nama UKM</label><span class="required-input"></span><div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input type="text" name="namaukm" value="{{ $user->nama_ukm }}" class="form-control" id="from-namaukm" /></div></div>
                        <div class="form-group" style="/*width:100px;*/margin-left:100px;"><label for="from-email">Alamat UKM</label><span class="required-input"></span><div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input type="text" name="alamatukm" value="{{ $user->alamat_ukm }}" class="form-control" id="from-alamatukm" /></div></div>

                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-row" style="margin-right:0px;">
                            <div class="col" style="/*background-color:white;*/margin-left:100px;">
                              <div class="form-group"><label for="from-phone">Phone</label><span class="required-input"></span><div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input type="text" name="phone" value="{{ $user->telpon }}" class="form-control" id="from-phone" /></div></div>
                              </div>
                            </div>
                            <div class="form-group" style="/*width:100px;*/margin-left:100px;"><label for="from-email">Jenis UKM</label><span class="required-input"></span><div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input type="text" name="jenisukm" value="{{ $user->jenis_ukm}}" class="form-control" id="from-jenis" /></div></div>

                              <div class="form-group" style="/*width:100px;*/margin-left:100px;"><label for="from-email">Alamat Pemilik</label><span class="required-input"></span><div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input type="text" name="alamat" value="{{ $user->alamat }}" class="form-control" id="from-alamat" /></div></div>
                                <div class="form-group">
                                  <div class="form-row">

                                    <div class="col" style="margin-left:100px;"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                    <div class="col"><button class="btn btn-primary btn-block" type="submit">Save&nbsp;<i class="fa fa-chevron-circle-right"></i></button></div>

                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                              <div class="modal-body">
                                <form action="javascript:void(0);" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                                  type="hidden" name="to" value="email@awebsite.com">
                                  <div class="form-row">
                                    <div class="col-md-6">
                                      <div id="successfail"></div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-12 col-md-6" id="message">
                                      <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small class="required-input">&nbsp;(*required)</small></small>
                                      </h2>
                                      <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" name="name" required="" placeholder="Full Name" id="from-name"></div>
                                        </div>
                                        <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                                          <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text" name="email" required="" placeholder="Email Address" id="from-email"></div>
                                          </div>
                                          <div class="form-row">
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                              <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                                <div class="input-group">
                                                  <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" name="phone" required="" placeholder="Primary Phone" id="from-phone"></div>
                                                </div>
                                              </div>
                                              <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></div><select class="form-control" name="call time" id="from-calltime"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" rows="5" name="comments" placeholder="Enter Comments" id="from-comments"></textarea></div>
                                              <div class="form-group">
                                                <div class="form-row">
                                                  <div class="col"><button class="btn btn-primary btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                                  <div class="col"><button class="btn btn-primary btn-block" type="submit">Submit <i class="fa fa-chevron-circle-right"></i></button></div>
                                                </div>
                                              </div>
                                              <hr class="d-flex d-md-none">
                                            </div>
                                            <div class="col-12 col-md-6">
                                              <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                              <div class="form-row">
                                                <div class="col-12">
                                                  <div class="static-map"><a href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                    target="_blank" rel="noopener"> <img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Daytona International Speedway"></a></div>
                                                  </div>
                                                  <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                    <div><span><strong>Name</strong></span></div>
                                                    <div><span>email@awebsite.com</span></div>
                                                    <div><span>www.awebsite.com</span></div>
                                                    <hr class="d-sm-none d-md-block d-lg-none">
                                                  </div>
                                                  <div class="col-sm-6 col-md-12 col-lg-6">
                                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                    <div><span><strong>Office Name</strong></span></div>
                                                    <div><span>55 Icannot Dr</span></div>
                                                    <div><span>Daytone Beach, FL 85150</span></div>
                                                    <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                    <hr class="d-sm-none">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <script src="{{asset('assets/js/jquery.min.js')}}"></script>
                          <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
                          <script src="{{asset('assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js')}}"></script>
                          <script src="{{asset('assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js')}}"></script>
                          <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
                          <script src="{{asset('assets/js/Simple-Slider.js')}}"></script>
                        </body>

                        </html>
