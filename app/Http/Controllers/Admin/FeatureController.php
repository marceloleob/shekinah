<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\FeatureService;

class FeatureController extends Controller
{
    /**
     * Lista as caracteristicas dos imoveis
     *
     * @return void
     */
    public function list()
    {
        $params = FeatureService::list();

        return view('admin.pages.feature-list')->with($params);
    }
}
