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
<body style="background-color: #e6e6e6">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  @if(Auth::User()->id_level == 1)
  @include('layouts/pemerintah-header', ['user' => $user])
  @else
  @include('layouts/pengusaha-header', ['user' => $user])
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2" id="tabel">
       <div class="card" style="margin-top: 90px; margin-left: 20px;">
        <div class="card-header">
          <h5 class="mb-1"><strong>Laporan</strong></h5>
        </div>
        <div class="card-body">
            @php
              $index = 1;
            @endphp
          <table class="table table-stripped">
            <tr style='font-weight:bold;'>
            </tr>
              <td class="text-center text-nowrap">No</td>
              <td class="text-center text-nowrap">Judul</td>
              <td class="text-center text-nowrap">Hasil Penjualan</td>
              <td class="text-center text-nowrap">Laba</td>
              <td class="text-center text-nowrap">Rugi</td>
            @foreach ($laporans as $laporan)
              <tr class="row-clicked">
                <td class="text-center text-nowrap">{{ $index++ }}</td>
                <td class="text-center text-nowrap">{{ $laporan->judul }}</td>
                <td class="text-center text-nowrap">{{ $laporan->hasil_penjualan }}</td>
                <td class="text-center text-nowrap">{{ $laporan->laba }}</td>
                <td class="text-center text-nowrap">{{ $laporan->rugi }}</td>
              </tr>
            @endforeach
          </table>
          @if(Auth::User()->id_level==2)
          <button type="submit" class="float-left btn btn-primary" id="kirim" data-toggle="modal" data-target="#tambah">Tambah</button>
          @endif
        </div>

          <div class="modal fade" id="tambah" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Laporan</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                  <form class="height:60px;" action="" method="post">
                    {{ csrf_field() }}
                    <p>Judul</p>
                    <input class="form-control" type="text" name="judul" required>
                    <br>
                    <p>Hasil Penjualan</p>
                    <input class="form-control" type="number" min="0" name="hasil_penjualan" required>
                    <br>
                    <p>Laba</p>
                    <input id="laba" class="form-control" type="number" min="0" name="laba" required>
                    <br>
                    <p>Rugi</p>
                    <input id="rugi" class="form-control" type="number" min="0" name="rugi" required>
                    <div class="modal-footer"><input class="btn btn-primary" type="submit" value="Submit" data-dismiss=""></div>
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
</div>
</div>
</div>
</div>


<div class="footer-dark" style="background-color:rgb(178,225,230); margin-top: 150px;">
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
<script type="text/javascript">
  var x = document.getElementById('laba');
  var y = document.getElementById('rugi');
  x.onchange = function(){
    if(this.value != "" || this.value.length > 0){
      y.disabled = true;
    }else{
      y.disabled = false;
    }
  }

  y.onchange = function(){
    if(this.value != "" || this.value.length > 0){
      x.disabled = true;
    } else{
      x.disabled = false;
    }
  }
</script>
</body>


</html>
