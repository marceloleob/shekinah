<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
	/**
	 * Page response
	 *
	 * @return Response
	 */
    public function index()
    {
        return view('site.pages.about');
    }
}
