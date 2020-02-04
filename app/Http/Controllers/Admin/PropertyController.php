<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdvertiseRequest;
use App\Services\AdvertiseService;
use App\Services\AdvertiseTypeService;
use App\Services\CityService;
use App\Services\FeatureService;
use App\Services\GroupTypeService;
use App\Services\PropertyTypeService;
use App\Services\StateService;
use App\Models\Progress;

class PropertyController extends Controller
{
    /**
     * Lista os imoveis publicados
     *
     * @return void
     */
    public function listPublished()
    {
        $params = AdvertiseService::list(Progress::$rules['PUBLISHED']);

        return view('admin.pages.property-list-published')->with($params);
    }

    /**
     * Lista os imoveis pendentes
     *
     * @return void
     */
    public function listWaiting()
    {
        $params = AdvertiseService::list(Progress::$rules['WAITING_REVIEW']);

        return view('admin.pages.property-list-waiting')->with($params);
    }

    /**
     * Lista os imoveis vendidos ou alugados
     *
     * @return void
     */
    public function listDone()
    {
        $params = AdvertiseService::list(Progress::$rules['SOLD_OR_RENTED']);

        return view('admin.pages.property-list-done')->with($params);
    }

    /**
     * Lista os imoveis so usuario logado
     *
     * @return void
     */
    public function listMine()
    {
        $params = AdvertiseService::listMine();

        return view('admin.pages.property-list-mine')->with($params);
    }

    /**
     * Formulario para cadastro de imoveis
     *
     * @param int $id
     * @param int $page
     * @return void
     */
    public function form($id = null, $page = null)
    {
        $params = [
            'optionsadvertisetype' => AdvertiseTypeService::options(),
            'optionsgrouptype'     => GroupTypeService::options(),
            'optionspropertytype'  => PropertyTypeService::optionsNoAjax('R'),
            'optionsfeature'       => FeatureService::options(),
            'optionsstate'         => StateService::options(),
            'optionscity'          => CityService::optionsNoAjax(),
            'data'                 => AdvertiseService::find($id),
            'feature'              => FeatureService::featuresByProperty($id),
        ];

        return view('admin.pages.property-form')->with(array_merge($params, ['page' => $page]));
    }

    /**
     * Create or Update after validated
     *
     * @param AdvertiseRequest $request
     * @return Response
     */
	public function store(AdvertiseRequest $request)
	{
        // sanitized and validated data
        $data = $request->validated();
        // save
        $response = AdvertiseService::store($data);
        // check error
        if ($response['type'] == 'error') {
            return redirect()->route('properties-form')->with('error', $response['message'])->withInput();
        }

        return redirect()->route('properties-form', [$response['entity']->id])->with('success', $response['message']);
    }
}
