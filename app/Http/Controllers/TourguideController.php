<?php

namespace App\Http\Controllers;

use App\Models\Tourguide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TourguideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourguide = \App\Models\Tourguide::all();
        // $tourguide = DB::table('tourguides')->where('id', Auth::id());
        return view('tourguide.index', compact('tourguide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tourguide.create');
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
     * @param  \App\Models\Tourguide  $tourguide
     * @return \Illuminate\Http\Response
     */
    public function show(Tourguide $tourguide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tourguide  $tourguide
     * @return \Illuminate\Http\Response
     */
    public function edit(Tourguide $tourguide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tourguide  $tourguide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourguide $tourguide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tourguide  $tourguide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tourguide $tourguide)
    {
        //
    }

    public function request(Request $request)
    {
        Tourguide::create([
            'user_id' => Auth::id(),
            'guide_id' => $request->id,
            'tour_date' => $request->request_date,
        ]);
        return redirect()->route('guide.index');
    }

    public function list()
    {
        $tourguide = DB::table('tourguides')
            ->join('guides', 'tourguides.guide_id', '=', 'guides.id')
            ->join('users', 'tourguides.user_id', '=', 'users.id')
            ->select('tourguides.*', 'guides.guide_name', 'guides.guide_photo', 'guides.guide_location', 'guides.guide_price', 'users.name')
            ->where('tourguides.user_id', Auth::id())
            ->get();
        return view('tourguide.list', compact('tourguide'));
    }

    public function feedbackGuide(Request $request)
    {
        $tourguide = Tourguide::findOrFail($request->id);
        if ($tourguide) {
            $tourguide->feedback = $request->stars;
            $tourguide->ulasan = $request->ulasan;
            $tourguide->save();
        }
        return redirect()->route('tourguide.list');
    }

    public function listFeedback()
    {
        $tourguide = DB::table('tourguides')
            ->join('guides', 'tourguides.guide_id', '=', 'guides.id')
            ->join('users', 'tourguides.user_id', '=', 'users.id')
            ->select('tourguides.*', 'guides.guide_name', 'users.name')
            ->get();
        return view('admin.feedback', compact('tourguide'));
    }

    public function userListFeedback(Request $request)
    {
        $tourguide = DB::table('tourguides')
            ->join('guides', 'tourguides.guide_id', '=', 'guides.id')
            ->join('users', 'tourguides.user_id', '=', 'users.id')
            ->where('tourguides.guide_id', $request->guide_id)
            ->select('tourguides.*', 'guides.guide_name', 'users.name')
            ->get();
        return view('tourguide.feedback', compact('tourguide'));
    }
}
