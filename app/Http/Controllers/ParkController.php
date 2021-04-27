<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('park.index');
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
     * @param  \App\Models\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function show(Park $park)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function edit(Park $park)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Park $park)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Park  $park
     * @return \Illuminate\Http\Response
     */
    public function destroy(Park $park)
    {
        //
    }
}
