<?php

namespace App\Http\Controllers;

use App\Models\cheapTrip;
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

        $cheapTrip1 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_name as park1', 'p1.park_name as park2', 'p1.park_name as park3')
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNull('cheaptrip.park_id2')
            ->whereNull('cheaptrip.park_id3')
            ->get();

        $cheapTrip2 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_name as park1', 'p2.park_name as park2', 'p2.park_name as park3')
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
            ->select('cheaptrip.*', 'guides.*', 'p1.park_name as park1', 'p2.park_name as park2', 'p3.park_name as park3')
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
        return view('cheapTrip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(([
            'cheapTrip_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));

        // $imgName = time() . '.' . request()->image->getClientOriginalExtension();

        $image = $request->file('cheapTrip_img');
        $destinationPath = public_path('/images');
        $imgName = time() . '.' . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imgName);

        // $request->story_img->move(public_path('images'), $imgName);

        cheapTrip::create([
            'cheapTrip_title' => $request->cheapTrip_title,
            'cheapTrip_desription' => $request->cheapTrip_desription,
            'cheapTrip_price' => $request->cheapTrip_price,
            'cheapTrip_img' => $imgName,
        ]);

        return redirect('cheapTrip');
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

    public function filter(Request $request)
    {
        if ($request->input('filterprice') == '1') {
            $down = 0;
            $up = 1000000;
        } else if ($request->input('filterprice') == '2') {
            $down = 1000000;
            $up = 5000000;
        } else if ($request->input('filterprice') == '3') {
            $down = 5000000;
            $up = 1000000000000;
        } else {
            $down = 0;
            $up = 1000000000000;
        }

        $cheapTrip1 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_name as park1', 'p1.park_name as park2', 'p1.park_name as park3')
            ->where('cheapTrip_price', '<', $up)
            ->where('cheapTrip_price', '>', $down)
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNull('cheaptrip.park_id2')
            ->whereNull('cheaptrip.park_id3')
            ->get();

        $cheapTrip2 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_name as park1', 'p2.park_name as park2', 'p2.park_name as park3')
            ->where('cheapTrip_price', '<', $up)
            ->where('cheapTrip_price', '>', $down)
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNotNull('cheaptrip.park_id2')
            ->whereNull('cheaptrip.park_id3')
            ->get();

        $cheapTrip3 = DB::table('cheaptrip')
            ->join('guides', 'cheaptrip.guide_id', '=', 'guides.id')
            ->join('parks as p1', 'cheaptrip.park_id1', '=', 'p1.id')
            ->join('parks as p2', 'cheaptrip.park_id2', '=', 'p2.id')
            ->join('parks as p3', 'cheaptrip.park_id3', '=', 'p3.id')
            ->where('cheapTrip_price', '<', $up)
            ->where('cheapTrip_price', '>', $down)
            ->whereNotNull('cheaptrip.park_id1')
            ->whereNotNull('cheaptrip.park_id2')
            ->whereNotNull('cheaptrip.park_id3')
            ->select('cheaptrip.*', 'guides.*', 'p1.park_name as park1', 'p2.park_name as park2', 'p3.park_name as park3')
            ->get();

        // $cheapTrip = array_merge($cheapTrip1, $cheapTrip2);

        return view('cheapTrip.index', compact('cheapTrip1', 'cheapTrip2', 'cheapTrip3'));
    }
}
