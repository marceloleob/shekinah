<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
	/**
	 * Renderiza a pagina
	 *
	 * @return Response
	 */
    public function index()
    {
        return view('site.pages.resume');
    }
}
