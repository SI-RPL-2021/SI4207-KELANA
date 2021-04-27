<?php

namespace App\Http\Controllers;

use App\Models\Detailuser;
use Illuminate\Http\Request;

class DetailuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailuser = \App\Models\Detailuser::all();
        return view('detailuser.index', compact('detailuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detailuser.create');
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
            'user_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));

        $image = $request->file('user_photo');
        $destinationPath = public_path('/images');
        $imgName = time() . '.' . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imgName);


        Detailuser::create([
            'user_id' => $request->user_id,
            'user_photo' => $imgName
        ]);

        return redirect('detailuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detailuser  $detailuser
     * @return \Illuminate\Http\Response
     */
    public function show(Detailuser $detailuser)
    {
        return view('detailuser.show', compact('detailuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detailuser  $detailuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailuser $detailuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detailuser  $detailuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailuser $detailuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detailuser  $detailuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailuser $detailuser)
    {
        //
    }
}
