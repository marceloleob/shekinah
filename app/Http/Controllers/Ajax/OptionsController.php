<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\CityService;
use App\Service\PropertyTypeService;

class OptionsController extends Controller
{
    /**
     * Return all property types
     *
     * @param Request $request
     * @return array
     */
    public function propertytype(Request $request)
    {
        return PropertyTypeService::optionsAjax($request['grouptype'], $request['propertytype']);
    }

    /**
     * Return all cities
     *
     * @param  $request
     * @return array
     */
    public function city(Request $request)
    {
        return CityService::optionsAjax($request['state'], $request['city']);
    }
}
