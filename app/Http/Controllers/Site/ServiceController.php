<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
	/**
	 * Page response
	 *
	 * @return Response
	 */
    public function indexRE()
    {
        return view('site.pages.realestate');
    }

    /**
	 * Page response
	 *
	 * @return Response
	 */
    public function indexLA()
    {
        return view('site.pages.legaladvice');
    }
}
