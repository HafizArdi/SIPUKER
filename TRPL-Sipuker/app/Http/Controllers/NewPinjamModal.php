<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;

class NewPinjamModal extends Controller
{
  public function pinjam(Request $request)
  {
    $pinjaman=new Pinjaman();
    $pinjaman->besar_pinjaman=$request->besar_pinjaman;
    $pinjaman->nama_peminjam=$reuest->nama_peminjam;
    $pinjaman->jenis_pinjaman=$reuest->jenis_pinjaman;
    $pinjaman->metode_pelunasan=$reuest->metode_pelunasan;

$pinjaman->id_status=1;
$pinjaman->tanggal_pinjam= date("Y-m-d");

$pinjaman->save();
  }
}
