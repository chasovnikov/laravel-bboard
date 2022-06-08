<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Rubric;
use App\Http\Requests\StoreRubricRequest;
use App\Http\Requests\UpdateRubricRequest;

class RubricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'rubrics' => Rubric::all(['name']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(__METHOD__);

        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRubricRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRubricRequest $request)
    {
        dd(__METHOD__);

        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rubric  $rubric
     * @return \Illuminate\Http\Response
     */
    public function show(Rubric $rubric)
    {
        dd(__METHOD__);

        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rubric  $rubric
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubric $rubric)
    {
        dd(__METHOD__);

        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRubricRequest  $request
     * @param  \App\Models\Rubric  $rubric
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRubricRequest $request, Rubric $rubric)
    {
        dd(__METHOD__);

        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rubric  $rubric
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubric $rubric)
    {
        dd(__METHOD__);

        return null;
    }
}