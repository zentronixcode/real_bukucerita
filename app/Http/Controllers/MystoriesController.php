<?php

namespace App\Http\Controllers;

use App\Mystories;
use Illuminate\Http\Request;

class MystoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "halo";
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mystories  $mystories
     * @return \Illuminate\Http\Response
     */
    public function show(Mystories $mystories)
    {
        echo "22";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mystories  $mystories
     * @return \Illuminate\Http\Response
     */
    public function edit(Mystories $mystories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mystories  $mystories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mystories $mystories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mystories  $mystories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mystories $mystories)
    {
        //
    }
}
