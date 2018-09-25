<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property int $id_level
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $telpon
 * @property string $nama_ukm
 * @property string $jenis_ukm
 * @property string $alamat_ukm
 */
class User extends Authenticatable
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at', 'id_level', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'telpon', 'nama_ukm', 'jenis_ukm', 'alamat_ukm'];

}
