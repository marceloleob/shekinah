<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PropertyTypeService;

class PropertyTypeController extends Controller
{
    /**
     * Lista os tipos de imoveis
     *
     * @return void
     */
    public function list($group)
    {
        $params = PropertyTypeService::list($group);

        return view('admin.pages.property-type-list')->with($params);
    }
}
