<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';
    protected $fillable = ['namaTopik','deskripsi','posthome'];
    protected $primaryKey='idTopik';
    public $timestamps=false;
}
