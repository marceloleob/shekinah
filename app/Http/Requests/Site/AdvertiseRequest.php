<?php

namespace App\Http\Requests\Site;

use App\Http\Requests\BaseFormRequest;
use App\Filters\Amount;
use App\Filters\Nullable;
use App\Filters\Phone;

class AdvertiseRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @var boolean
     */
    public $authorize = true;

    /**
     * Custom filter rules
     *
     * @var array
     */
    public static $customFilters = [
        'phone'          => Phone::class,
        'amount'         => Amount::class,
        'nullable'       => Nullable::class,
    ];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        // CONTACT
        'name'           => 'trim|escape|capitalize',
        'email'          => 'trim|escape|lowercase',
        'password'       => 'trim',
        'cpf'            => 'trim|escape',
        'born'           => 'trim|format_date:d/m/Y,Y-m-d',
        'phone'          => 'digit|phone',
        // BASIC INFORMATION
        'owner_user'     => 'trim|escape|uppercase',
        'advertise_type' => 'trim|escape|uppercase',
        'group_type'     => 'trim|escape|uppercase',
        'property_type'  => 'digit',
        'bathroom'       => 'digit',
        'bedroom'        => 'digit',
        'master'         => 'digit|nullable',
        'parking'        => 'digit',
        'square_meter'   => 'amount',
        'price'          => 'amount',
        'condo_fee'      => 'amount',
        'tax_fee'        => 'amount',
        'description'    => 'trim|strip_tags',
        // ADDRESS
        'address'        => 'trim|escape',
        'number'         => 'trim|escape',
        'comp'           => 'trim|escape',
        'neighborhood'   => 'trim|escape',
        'city'           => 'digit',
        'state'          => 'digit',
        'zipcode'        => 'digit',
        // FEATURES
        'feature'        => '',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        // CONTACT
        'name'           => 'required|string|min:2|max:100',
        'email'          => 'required|string|min:3|max:100|email|unique:users',
        'password'       => 'required|string|min:6',
        'cpf'            => 'required',
        'born'           => 'required',
        'phone'          => 'required',
        // BASIC INFORMATION
        'owner_user'     => 'required|string|required_with:N,S',
        'advertise_type' => 'required|string|required_with:A,V',
        'group_type'     => 'required|string|required_with:C,R',
        'property_type'  => 'required',
        'bathroom'       => 'required',
        'bedroom'        => 'required',
        'master'         => 'nullable',
        'parking'        => 'required',
        'square_meter'   => 'required',
        'price'          => 'required',
        'condo_fee'      => 'nullable',
        'tax_fee'        => 'nullable',
        'description'    => 'required|min:5|max:2000',
        // ADDRESS
        'address'        => 'required|min:5|max:255',
        'number'         => 'required|max:50',
        'comp'           => 'max:100',
        'neighborhood'   => 'required|min:3|max:255',
        'city'           => 'required',
        'state'          => 'required',
        'zipcode'        => 'required|max:8',
        // FEATURES
        'feature'        => 'required|array',
    ];
}
