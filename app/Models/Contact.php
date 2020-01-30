<?php

namespace App\Models;

use App\Models\ModelBase;

class Contact extends ModelBase
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'subject',
        'text',
        'read',
    ];
}
