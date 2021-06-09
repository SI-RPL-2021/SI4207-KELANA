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
        $kelanafriend = \App\Models\Kelanafriend::all();
        return view('temankelana.index', compact('kelanafriend'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temankelana.create');
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
            'friend_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));


        $image = $request->file('friend_img');
        $destinationPath = public_path('/images');
        $imgName = time() . '.' . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imgName);

        Kelanafriend::create([
            'friend_name' => $request->friend_name,
            'friend_location' => $request->friend_location,
            'friend_instagram' => $request->friend_instagram,
            'friend_whatsapp' => $request->friend_whatsapp,
            'friend_img' => $imgName,

        ]);

        return redirect('temankelana');
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
