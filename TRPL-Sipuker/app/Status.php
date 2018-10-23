<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_status
 * @property string $status_pinjaman
 */
class Status extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'status';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_status';

    /**
     * @var array
     */
    protected $fillable = ['status_pinjaman'];

}
