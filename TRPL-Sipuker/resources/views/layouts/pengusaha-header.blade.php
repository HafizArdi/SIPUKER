<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgb(178,225,230);">
  <div class="container"><a class="navbar-brand" href="#" style="/*margin-left:50px;*/"><img src="{{asset ('assets/img/logo/logo.png')}}" style="width:70px;margin-left:10px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div
    class="collapse navbar-collapse" id="navcol-1" style="margin-left:80px;margin-top:30px;">
    <ul class="nav navbar-nav">
      <li class="nav-item" role="presentation"><a class="nav-link" href="/pengusaha" style="color:rgb(6,6,6);font-weight:bold;font-size:18px;">Beranda</a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="/pengusaha/pinjamanModal" style="color:rgb(6,6,6);font-weight:bold;font-size:18px;">Pinjaman Modal</a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="/pengusaha/kegiatanUMKMUser/" style="color:rgb(6,6,6);font-weight:bold;font-size:18px;">Kegiatan UMKM</a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="/forum" style="color:rgb(0,0,0);font-weight:bold;font-size:18px;">Forum</a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="/laporan" style="color:rgb(0,0,0);font-weight:bold;font-size:18px;">Laporan</a></li>
      <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="font-weight:bold;font-size:18px;color:rgb(0,0,0);margin-left:20px;"><img src="{{asset ('assets/img/account.png')}}" style="width:30px;">&nbsp;{{ $user->name }}</a>
        <div
        class="dropdown-menu" role="menu"><a class="dropdown-item disabled" role="presentation" href="/pengusaha/profil" style="color:rgb(0,0,0);">Akun</a><a class="dropdown-item" role="presentation" href="{{url('logout')}}" style="color:rgb(8,8,8);">Logout</a></div>
      </li>
    </ul>
  </div>
</div>
</nav>
