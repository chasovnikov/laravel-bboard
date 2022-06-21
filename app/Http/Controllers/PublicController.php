<?php

namespace App\Http\Controllers;

use App\Models\Advert;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
                'adverts' => Advert::latest()->get(),
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(Advert $advert)
    {
        return view('show', compact('advert'));
    }
}
