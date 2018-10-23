<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_peminjam
 * @property int $id_status
 * @property int $id_pengusaha
 * @property string $nama_peminjam
 * @property float $besar_pinjaman
 * @property string $jenis_pinjaman
 * @property string $metode_pelunasan
 * @property string $tanggal_pinjam
 * @property string $created_at
 * @property string $updated_at
 * @property Status $status
 * @property User $user
 */
class Pinjaman extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pinjaman';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_peminjam';

    /**
     * @var array
     */
    protected $fillable = ['id_status', 'id_pengusaha', 'nama_peminjam', 'besar_pinjaman', 'jenis_pinjaman', 'metode_pelunasan', 'tanggal_pinjam', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Status', 'id_status', 'id_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_pengusaha');
    }
}
