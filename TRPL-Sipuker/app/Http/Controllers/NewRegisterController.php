<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class NewRegisterController extends Controller
{
  public function register(Request $request)
  {
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->id_level = 2;
    // $user->id_level = Level::where('nama_user', 'Pengusaha')->get()->first()->id_level;
    $user->tempat_lahir = $request->tempat_lahir;
    $user->tanggal_lahir = $request->tanggal_lahir;
    $user->jenis_kelamin = $request->jenis_kelamin;
    $user->alamat = $request->alamat;
    $user->telpon= $request->no_telepon;
    $user->nama_ukm = $request->nama_ukm;
    $user->jenis_ukm = $request->jenis_ukm;
    $user->alamat_ukm = $request->alamat_ukm;

    $user->save();
  }
}
