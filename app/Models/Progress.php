<?php

namespace App\Models;

use App\Models\ModelBase;

class Progress extends ModelBase
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
        'name',
        'status',
    ];

    /**
     * The attributes that should be rules.
     *
     * @var array
     */
    public static $rules = [
        'PUBLISHED'      => 1, // PUBLICADO
        'WAITING_REVIEW' => 2, // AGUARDANDO ANALISE
        'SOLD_OR_RENTED' => 3, // IMOVEL VENDIDO OU ALUGADO
    ];
}
