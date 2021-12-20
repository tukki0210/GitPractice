<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTopPageRequest;
use App\Http\Requests\UpdateTopPageRequest;
use App\Models\TopPage;

class TopPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopPageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopPageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function show(TopPage $topPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function edit(TopPage $topPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopPageRequest  $request
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopPageRequest $request, TopPage $topPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopPage $topPage)
    {
        //
    }
}
