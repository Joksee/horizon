<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$services = Services::all();
        //return dd($services);

        return view('Site.Services.Index', 
        ['services' => Services::all()] 
    
    ); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Services $service)
    { 
        //
        return view('site.Services.show', ['service' => $service->load('servicelists')]);;
    }

}
