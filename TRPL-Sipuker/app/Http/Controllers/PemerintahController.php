<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pinjaman;
use App\post;

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
      $fileName   = $request->file('foto')->getClientOriginalName();
      $request->file('foto')->move("image/", $fileName);
      $post = ([
        'judul' =>$request->judul,
        if ($request->file('foto')==null) {
          'foto' => '',
        }
        else{
          'foto' => $request->file('foto')->getClientOriginalName(),
        }
        'idKategori' =>$request->kategori,
        'deskripsi' => $request->deskripsi,
        'posthome' => 1,
        ]);

      //dd($post);
      post::create($post);
      $view = post::all();
      //dd($view);
      $user = Auth::user();
      //dd($user);
      return view('pemerintah/index', compact('view', 'user'));
    }
}
