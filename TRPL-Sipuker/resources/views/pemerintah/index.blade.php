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
    <link rel="stylesheet" href="{{asset ('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/Login-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/beranda.css')}}">

    <style type="text/css">
    .posting{
        margin-top:20px;
    }
    </style>

</head>
<body style="background-color: #e6e6e6">
  @include('layouts/pemerintah-header', ['user' => $user])
  <div class="container">
  <div class="row" style="margin-top:50px;">
        <div class="col-md-6" >
                <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" action="/admin/postforum" method="post" class="form-horizontal">
                    {{csrf_field()}}
                    <input type="text" class="form-group form-control" name="judul" placeholder="Judul"/>
                    <div>
                        <div class="col-md-6" style="margin-left: -15px; margin-bottom: 20px;">
                            <select name="kategori" class="form-control">
                                <option value="0">Kategori</option>
                                <option value="1">Forum</option>
                                <option value="2">Kegiatan UMKM</option>
                            </select>
                        </div>
                    </div>
                    <textarea class="form-group form-control" rows="3" name="deskripsi"></textarea>
                    <div class="file float-left btn-sml yte" id="upload" style=
                    'width:80px'><img src="{{ asset ('assets/img/outbox.png')}}" style="width: 25px;"> Upload <input class="ye" type="file" name="foto"/>

                    </div>
                    <button type="submit" class="float-right btn btn-primary" id="kirim">Kirim</button>
                   </form>
                   </div>
                   </div>

            @if(count($view) > 0)
            @foreach($view as $data)
            @if($data->idKategori == 1)
                    <div class="card posting">
                        <div class="card-header">
                            <h5 class="mb-1">{{$data->judul}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-4">
                                <img src="/image/{{$data->foto}}" class="card-img" style="width:auto; height:100px; margin-right: 20px;">
                            </div>
                            <div class="col">
                                <p class="card-text">{{$data->deskripsi}}</p>
                            </div>
                        </div> 
                            <br>
                            <br>
                            <a href="{{url('/hapusForum/'.$data->idPost)}}" class="float-left btn btn-danger">Hapus</a>
                            <a href="" class="float-right btn btn-primary">Lihat Detail</a>
                        </div>

                    </div>
            @endif
            @endforeach
            @else
                    <div class="card" id="post">
                    Data Kosong
                    </div>
            @endif
       
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Hot Topics</h5>
                </div>

            @if(count($view) > 0)
            @foreach($view as $data)
            @if($data->idKategori==2)
             
            
                <div class="card-body">
                    <p class="card-text"></p>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">{{$data->judul}}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$data->deskripsi}}</p>
                        </div>
                        <div class="card-footer">
                        <a href="" class="float-left btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
        @endif
        @endforeach
        @endif
        </div>
        </div>
        </div>

</div>
    <div class="footer-dark" style="background-color:rgb(178,225,230); margin-top: 150px;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h4 style="color:rgb(0,0,0);">TRPL Kelompok</h4>
                        <ul>
                            <li><a href="#" style="color:rgb(0,0,0);">Ita Sugiharti</a></li>
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
            </div>
        </footer>
    </div>
    <script src="{{asset ('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset ('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js')}}"></script>
    <script src="{{asset ('assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js')}}"></script>
    <script src="{{asset ('assets/js/swiper.jquery.min.js')}}"></script>
    <script src="{{asset ('assets/js/Simple-Slider.js')}}"></script>
</body>

</html>
