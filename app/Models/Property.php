<?php

namespace App\Models;

use App\Models\ModelBase;

class Property extends ModelBase
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'type_id',
        'city_id',
        'progress_id',
        'owner_user',
        'advertise_type',
        'group_type',
        'bathroom',
        'bedroom',
        'master',
        'parking',
        'square_meter',
        'price',
        'condo_fee',
        'tax_fee',
        'description',
        'address',
        'number',
        'comp',
        'neighborhood',
        'zipcode',
        'info_owner',
        'info_docs',
        'info_photos',
        'status',
    ];

    /**
     * The attributes that should be groups
     *
     * @var array
     */
    public static $group = [
        'R' => 'residencial',
        'C' => 'comercial',
    ];
}
