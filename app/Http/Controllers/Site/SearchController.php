<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\AdvertiseService;
use App\Services\AdvertiseTypeService;
use App\Services\CityService;
use App\Services\FeatureService;
use App\Services\GroupTypeService;
use App\Services\PropertyTypeService;
use App\Services\StateService;

class SearchController extends Controller
{
    /**
     * Show search result page
     *
     * @param string $searchType
     * @param string $propertyType
     * @param string $state
     * @param string $city
     * @return Response
     */
    public function show($searchType = null, $propertyType = null, $state = null, $city = null)
    {
        // constroi um array de parametros
        $data = [
            'search_type'   => $searchType,
            'property_type' => $propertyType,
            'state'         => $state,
            'city'          => $city,
        ];

        // retorna um array com data e paginator
        $searchResult = AdvertiseService::search($data);

        $params = [
            'optionsadvertisetype' => AdvertiseTypeService::options(),
            'optionsgrouptype'     => GroupTypeService::options(),
            'optionspropertytype'  => PropertyTypeService::optionsNoAjax('R'),
            'optionsfeature'       => FeatureService::options(),
            'optionsstate'         => StateService::options(),
            'optionscity'          => CityService::optionsNoAjax(),
        ];

        return view('site.pages.result')->with(array_merge($params, $searchResult));
    }
}
