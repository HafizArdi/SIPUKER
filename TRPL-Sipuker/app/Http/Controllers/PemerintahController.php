<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pinjaman;
use App\post;
use App\kegiatanumkm;
use App\User;
use App\Laporan;
use Khill\Lavacharts\Lavacharts;
use Lava;


class PemerintahController extends Controller
{
  public function index(){
    $user = Auth::user();
    //dd($user);
    $view = post::all();
    return view('pemerintah/index', compact('view', 'user'));
  }

  public function getProfil()
  {
    $user = Auth::user();
    return view('pemerintah/profilprt', compact('user'));
  }

  public function getModalPrt()
  {
    $user = Auth::user();
    $pinjaman_modal = Pinjaman::all();
    // dd($pinjaman_modal);
    return view('pemerintah/pinjamanModalprt', compact('user', 'pinjaman_modal'));
  }

  public function updateStatusPinjaman(Request $request)
  {
    Pinjaman::find($request->id_pinjaman)->update(['id_status' => 2]);
    return redirect('admin/pinjamanModalprt');
  }

  public function sendpost(Request $request){
    //dd($request->file('foto'));
    if ($request->file('foto')=="") {
      $post = ([
        'foto' => '',
        'judul' =>$request->judul,
        'idKategori' => $request->kategori,
        'deskripsi' => $request->deskripsi,
        'posthome' => 1,
      ]);

    }
    else{
      $post = ([
        'foto' => $request->file('foto')->getClientOriginalName(),
        'judul' =>$request->judul,
        'idKategori' => $request->kategori,
        'deskripsi' => $request->deskripsi,
        'posthome' => 1,
      ]);
      $request->file('foto')->move("image/", $request->file('foto')->getClientOriginalName());
    }


      //dd($post);
    post::create($post);
    return redirect('admin');
  }

  public function getKegiatan(Request $request)
  {
    $user = Auth::user();
    $view= kegiatanumkm::all();
    return view('pemerintah.kegiatanUMKM', compact('user','view'));

  }

  public function hapusForum($id){

    $edit= post::find($id);
    $edit->delete();
    return redirect('admin');


  }

  public function forum(){
    $user = Auth::user();
    return view('pemerintah/forum', compact('user'));

  }

  public function detailForum(){
    $user = Auth::user();
    return view('pemerintah/detailForum', compact('user'));

  }

  public function laporan(){
    $user = Auth::user();
    $umkms = User::where('id_level', 2)->get();
    return view('pemerintah/laporan', compact('user', 'umkms'));
  }

  public function laporanUkm($id)
  {
    $ukm = User::find($id);
    // jika user tidak ada atau bukan ukm
    if($ukm == null || $ukm->id_level != 2){
      return redirect('admin/laporan');
    }

    $laporans = Laporan::where('id_user', $id)->get();
    $user = Auth::user();
    // http://lavacharts.com/#javascript

    return view('pemerintah.laporan_ukm', compact('user','ukm', 'laporans'));
  }

}
