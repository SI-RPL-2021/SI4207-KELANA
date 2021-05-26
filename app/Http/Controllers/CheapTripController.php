<?php

namespace App\Http\Controllers;

use App\Models\CheapTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheapTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cheapTrip = DB::table('cheaptrip')
        //     ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
        //     ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
        //     ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
        //     ->join('parks as p3', 'cheaptrip.park_id3', '=', 'p3.id')
        //     ->whereNotNull('cheaptrip.park_id1')
        //     ->whereNotNull('cheaptrip.park_id2')
        //     ->whereNotNull('cheaptrip.park_id3')
        //     ->select('cheaptrip.*', 'guides.*', 'p1.park_title as park1', 'p2.park_title as park2', 'p3.park_title as park3')
        //     ->get();

        // $cheapTrip = DB::table('cheaptrip')
        //     ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
        //     ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
        //     ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
        //     ->select('cheaptrip.*', 'guides.*', 'p1.park_title as park1', 'p2.park_title as park2', 'p2.park_title as park3')
        //     ->whereNotNull('cheaptrip.park_id1')
        //     ->whereNotNull('cheaptrip.park_id2')
        //     ->get();

        $cheapTrip1 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_title as park1', 'p1.park_title as park2', 'p1.park_title as park3')
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNull('cheaptrip.park_id2')
            ->whereNull('cheaptrip.park_id3')
            ->get();

        $cheapTrip2 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_title as park1', 'p2.park_title as park2', 'p2.park_title as park3')
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNotNull('cheaptrip.park_id2')
            ->whereNull('cheaptrip.park_id3')
            ->get();

        $cheapTrip3 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
            ->join('parks as p3', 'cheaptrip.park_id3', '=', 'p3.id')
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNotNull('cheaptrip.park_id2')
            ->whereNotNull('cheaptrip.park_id3')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_title as park1', 'p2.park_title as park2', 'p3.park_title as park3')
            ->get();

        // $cheapTrip = array_merge($cheapTrip1, $cheapTrip2);

        return view('cheapTrip.index', compact('cheapTrip1', 'cheapTrip2', 'cheapTrip3'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
