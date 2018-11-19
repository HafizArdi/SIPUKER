<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pinjaman;
use App\Post;
use App\kegiatanumkm;

class PengusahaController extends Controller
{
  public function index(){
    $user = Auth::user();
    $view = post::all();
    return view('pengusaha/beranda', compact('user','view'));
  }

  public function getProfil()
  {
    $user = Auth::user();
    return view('pengusaha/profil', compact('user'));
  }

  public function getModal()
  {
    $user = Auth::user();
    $id_user = $user->id;
    $pinjaman_modal = Pinjaman::where('id_pengusaha', $id_user)->get();
    return view('pengusaha/pinjamanModal', compact('user', 'pinjaman_modal'));
  }

  public function pinjam(Request $request)
  {
    $user = Auth::user();
    $pinjaman=new Pinjaman();
    $pinjaman->besar_pinjaman=$request->besar_pinjaman;
    $pinjaman->nama_peminjam=$request->nama_peminjam;
    $pinjaman->jenis_pinjaman=$request->jenis_pinjaman;
    $pinjaman->metode_pelunasan=$request->metode_pelunasan;

    $pinjaman->id_status=1;
    $pinjaman->tanggal_pinjam= date("Y-m-d");
    $pinjaman->id_pengusaha=$user->id;
    $pinjaman->save();
    return redirect('pengusaha/pinjamanModal');
  }

  public function sendpost(Request $request){
    //dd($request->file('foto'));
      
      if ($request->file('foto')=="") {
        $post = ([
        'foto' => '',
        'judul' =>$request->judul,
        'idKategori' => 1,
        'deskripsi' => $request->deskripsi,
        'posthome' => 1,
        ]);
          
        }
        else{
          $post = ([
        'foto' => $request->file('foto')->getClientOriginalName(),
        'judul' =>$request->judul,
        'idKategori' => 1,
        'deskripsi' => $request->deskripsi,
        'posthome' => 1,
        ]);
          $request->file('foto')->move("image/", $fileName);
        }
      

      //dd($post);
      post::create($post);
      return redirect('pengusaha');
    }

    public function redir($id) {
      $user = Auth::user();
      return view('daftarKegiatan', compact('user', 'id'));
  }

    public function daftarMember(Request $request, $id){
    $insert = ([
          'idPost' => $id,
          'namaPendaftar' => $request->namaPendaftar,
          'alamat' => $request->alamat,
          'NoTelpon' => $request->NoTelpon,
          'iduser' => Auth::User()->id
      
          ]);
          kegiatanumkm::create($insert);
          return redirect('pengusaha');
      
     
    }

  public function getKegiatan(Request $request)
  {
    $user = Auth::user();
    $view= kegiatanumkm::where('iduser', Auth::user()->id)->get();
    return view('pemerintah/kegiatanUMKM', compact('user','view'));
  }
}
