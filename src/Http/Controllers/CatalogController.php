<?php

namespace Kimix\Ecommerce\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class CatalogController extends Controller
{
    /**
     * Show the catalog home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kimix-ecommerce::catalog/index');
    }
}
