<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    protected $fillable = ['judul','foto','idKategori','deskripsi','posthome'];
    protected $primaryKey='idPost';
    public $timestamps=false;

     public function kegiatanumkms()
    {
        return $this->hasMany('App\kegiatanumkm');
    }
}
