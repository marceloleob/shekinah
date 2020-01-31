<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Service\AdvertiseService;
use App\Service\AdvertiseTypeService;
use App\Service\CityService;
use App\Service\FeatureService;
use App\Service\GroupTypeService;
use App\Service\PropertyTypeService;
use App\Service\StateService;

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
