<?php

namespace App\Http\Requests\Ajax;

use App\Http\Requests\BaseFormRequest;

class PropertyTypeRequest extends BaseFormRequest
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
        'grouptype'    => 'trim|uppercase',
        'propertytype' => 'trim|uppercase',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $validations = [
        'grouptype'    => 'required|string|required_with:C,R',
        'propertytype' => '',
    ];

}
