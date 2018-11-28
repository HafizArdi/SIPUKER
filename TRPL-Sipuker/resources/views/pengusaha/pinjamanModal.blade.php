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
  <link rel="stylesheet" href="{{asset ('assets/css/peminjamanModal.css')}}">

</head>
<body style="background-color: #f5f6fa">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  @include('layouts/pengusaha-header', ['user' => $user])
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2" id="tabel">
        <div class="card" style="margin-top: 50px;">
          <div class="card-header"><h3><strong>Pinjaman Modal</strong></h3></div>

          <div class="card-body">
            <table class="table table-stripped">
              <tr style='font-weight:bold;'>
            </table>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                  <div class="modal-body">

                    <form class="height:60px;" action="" method="post">
                      {{ csrf_field() }}
                      <p>Nama Peminjam</p>
                      <input class="form-control" type="text" name="nama_peminjam" required>
                      <br>
                      <p>Besar Pinjaman</p>
                      <input class="form-control" type="number" min="0" name="besar_pinjaman" required>
                      <br>
                      <p>Jenis Pinjaman</p>
                      <input class="form-control" type="text" name="jenis_pinjaman" required>
                      <br>
                      <p>Metode Pelunasan</p>
                      <input class="form-control" type="text" name="metode_pelunasan" required>

                      <div class="modal-footer"><input class="btn btn-primary" type="submit" value="Ajukan"></input></div>
                      <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Kembali</button></div>
                    </div>


                  </form>
                </div>
              </div>

            </div>

            <div class="panel-body">
              <table class="table table-stripped">
                <tr style='font-weight:bold;'>
                  <td class="text-center text-nowrap">Tanggal Pinjam</td>
                  <td class="text-center text-nowrap">Nama Peminjam</td>
                  <td class="text-center text-nowrap">Besar Pinjaman</td>
                  <td class="text-center text-nowrap">Status</td>
                </tr>
                @foreach($pinjaman_modal as $data)
                <tr>

                  <td class="text-center text-nowrap">{{$data->tanggal_pinjam}}</td>
                  <td class="text-center text-nowrap">{{$data->nama_peminjam}}</td>
                  <td class="text-center text-nowrap">Rp {{$data->besar_pinjaman}}</td>
                  <td class="text-center text-nowrap">{{App\Status::find($data->id_status)->status_pinjaman}}</td>

                </tr>
                @endforeach
              </table>
              <a href="" class="float-left btn btn-primary" data-toggle="modal" data-target="#modal1">Tambah Pinjaman</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="footer-dark"  style="background-color:rgb(178,225,230);">
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
      </div>
    </footer>
  </div>
  <script src="{{asset ('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset ('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js')}}"></script>
  <script src="{{asset ('assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
  <script src="{{asset ('assets/js/Simple-Slider.js')}}"></script>
  <script src="{{asset ('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
</body>

</html>
