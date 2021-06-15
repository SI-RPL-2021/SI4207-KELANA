<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = \App\Models\Hotel::all();
        return view('hotel.index', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
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
            'hotel_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));

        // $imgName = time() . '.' . request()->image->getClientOriginalExtension();

        $image = $request->file('hotel_img');
        $destinationPath = public_path('/images');
        $imgName = time() . '.' . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imgName);

        // $request->story_img->move(public_path('images'), $imgName);

        Hotel::create([
            'hotel_name' => $request->hotel_name,
            'hotel_date' => $request->hotel_date,
            'hotel_description' => $request->hotel_description,
            'hotel_location' => $request->hotel_location,
            'hotel_price' => $request->hotel_price,
            'hotel_contact' => $request->hotel_contact,
            'hotel_img' => $imgName,
        ]);

        return redirect('hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotel.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $hotel = hotel::query()
            ->where('hotel_title', 'LIKE', "%{$search}%")
            ->get();

        return view('hotel.index', compact('hotel'));
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filterLocation');

        $hotel = hotel::query()
            ->where('hotel_location', 'LIKE', "%{$filter}%")
            ->get();

        return view('hotel.index', compact('hotel'));
    }
}
