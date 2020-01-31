<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseFormRequest;
use App\Filters\Phone;

class UserRequest extends BaseFormRequest
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
        'phone'     => Phone::class,
    ];

   /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'        => 'digit',
        'name'      => 'trim|escape|capitalize',
        'email'     => 'trim|escape|lowercase',
        'password'  => 'trim',
        'cpf'       => 'trim|escape',
        'born'      => 'trim|format_date:d/m/Y,Y-m-d',
        'phone'     => 'digit|phone',
        'rule'      => 'digit',
        'status'    => 'cast:boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'        => 'integer',
        'name'      => 'required|string|min:2|max:100',
        'email'     => 'required|string|min:3|max:100|email|unique:users',
        'password'  => 'required|string|min:6|confirmed',
        'cpf'       => 'required',
        'born'      => 'required',
        'phone'     => 'required',
        'rule'      => 'integer',
        'status'    => 'integer',
    ];

}
