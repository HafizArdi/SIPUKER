<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_laporan
 * @property int $id_user
 * @property string $judul
 * @property int $hasil_penjualan
 * @property int $laba
 * @property int $rugi
 */
class Laporan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laporan';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_laporan';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'judul', 'hasil_penjualan', 'laba', 'rugi'];

}
