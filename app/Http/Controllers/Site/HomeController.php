<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Service\GroupTypeService;
use App\Service\PropertyTypeService;
use App\Service\CityService;

class HomeController extends Controller
{
	/**
	 * Renderiza a pagina
	 *
	 * @return Response
	 */
    public function index()
    {
        $params = [
            'optionstype' => PropertyTypeService::optionsSearch(),
            'optionscity' => CityService::optionsNoAjax(),
        ];

        return view('site.pages.index')->with($params);
    }
}
