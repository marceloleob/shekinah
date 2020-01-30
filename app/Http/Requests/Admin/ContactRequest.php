<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;


class ContactRequest extends BaseFormRequest
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
    public static $customFilters = [];

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'id'      => 'digit',
        'read'    => 'cast:boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'id'      => 'integer',
        'read'    => 'boolean',
    ];
}
