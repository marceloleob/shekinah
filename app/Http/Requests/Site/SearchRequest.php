<?php

namespace App\Http\Requests\Site;

use App\Http\Requests\BaseFormRequest;

class SearchRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @var boolean
     */
    public $authorize = true;

    /**
     * Filter rules
     *
     * @var array
     */
    public static $filters = [
        'search_type'   => 'trim|escape|uppercase',
        'group_type'    => 'trim|escape|uppercase',
        'property_type' => 'digit',
        'city_name'     => 'trim',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'search_type'   => 'string|required_with:A,V,',
        'group_type'    => 'string|required_with:C,R,',
        'property_type' => '',
        'city_name'     => '',
    ];
}
