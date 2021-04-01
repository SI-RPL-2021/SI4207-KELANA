<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\story;
=======
use App\Models\Story;
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('story.index');
=======
        $story = \App\Models\Story::all();
        return view('story.index', compact('story'));
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('story.create');
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
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
<<<<<<< HEAD
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(story $story)
=======
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(story $story)
=======
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, story $story)
=======
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  \App\Models\story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(story $story)
=======
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
    {
        //
    }
}
