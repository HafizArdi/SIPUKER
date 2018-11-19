<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatanumkm extends Model
{
    protected $table = 'kegiatanumkm';
    protected $fillable = ['idPost','namaPendaftar','alamat','NoTelpon','iduser'];
    protected $primaryKey='idKegiatan';
    public $timestamps=false;

     public function post()
    {
        return $this->belongsTo('App\post','idPost');
    }
}
