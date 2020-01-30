<?php

namespace App\Models;

use App\Models\ModelBase;

class State extends ModelBase
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'uf',
        'name',
    ];
}
