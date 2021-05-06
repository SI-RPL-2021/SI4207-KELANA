<?php

namespace App\Http\Controllers;

use App\Models\Kelanafriend;
use Illuminate\Http\Request;

class KelanafriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temankelana.index');
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
     * @param  \App\Models\Kelanafriend  $kelanafriend
     * @return \Illuminate\Http\Response
     */
    public function show(Kelanafriend $kelanafriend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelanafriend  $kelanafriend
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelanafriend $kelanafriend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelanafriend  $kelanafriend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelanafriend $kelanafriend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelanafriend  $kelanafriend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelanafriend $kelanafriend)
    {
        //
    }
}
