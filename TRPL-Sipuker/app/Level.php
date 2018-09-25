<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_level
 * @property string $nama_user
 */
class Level extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'level';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_level';

    /**
     * @var array
     */
    protected $fillable = ['nama_user'];

}
