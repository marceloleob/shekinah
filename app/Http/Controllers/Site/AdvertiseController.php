<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AdvertiseRequest;
use App\Services\AdvertiseService;
use App\Services\AdvertiseTypeService;
use App\Services\CityService;
use App\Services\FeatureService;
use App\Services\GroupTypeService;
use App\Services\PropertyTypeService;
use App\Services\StateService;
use App\Services\UserService;

class AdvertiseController extends Controller
{
	/**
	 * Page response
	 *
	 * @return Response
	 */
    public function index()
    {
        // verifica se usuario esta logado
        if (UserService::check()) {
            // redireciona para o formulario do ADMIN
            return redirect()->route('properties-advertise');
        }

        $params = [
            'optionsadvertisetype' => AdvertiseTypeService::options(),
            'optionsgrouptype'     => GroupTypeService::options(),
            'optionspropertytype'  => PropertyTypeService::optionsNoAjax('R'),
            'optionsfeature'       => FeatureService::options(),
            'optionsstate'         => StateService::options(),
            'optionscity'          => CityService::optionsNoAjax(),
        ];

        return view('site.pages.advertise')->with($params);
    }

    /**
     * Save after validated()
     *
     * @param AdvertiseRequest $request
     * @return Response
     */
	public function create(AdvertiseRequest $request)
	{
        // sanitized and validated data
        $data = $request->validated();
        // save
        $response = AdvertiseService::store($data);
        // check error
        if ($response['type'] == 'error') {
            return redirect()->route('advertise')->with('error', $response['message'])->withInput();
        }

        return redirect()->route('advertise')->with('success', $response['message']);
    }
}
