<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Explore;
use App\Models\Food;
use App\Models\Guide;
use App\Models\Hotel;
use App\Models\Kelanafriend;
use App\Models\Merchant;
use App\Models\Park;
use App\Models\Story;
use App\Models\Tourguide;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function adminuser()
    {
        $user = \App\Models\User::all();
        $explore = \App\Models\Explore::all();
        $food = \App\Models\Food::all();
        $guide = \App\Models\Guide::all();
        $hotel = \App\Models\Hotel::all();
        $kelanafriend = \App\Models\Kelanafriend::all();
        $merchant = \App\Models\Merchant::all();
        $park = \App\Models\Park::all();
        $story = \App\Models\Story::all();
        $tourguide = \App\Models\Tourguide::all();

        return view('admin.user', compact('user', 'explore', 'food', 'guide', 'hotel', 'kelanafriend', 'merchant', 'park', 'story', 'tourguide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
