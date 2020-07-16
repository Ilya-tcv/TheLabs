<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store()
    {
        $testimonial = new Testimonial();
        // STORE
        $testimonial -> name = request('name');
        $testimonial -> job = request('job');
        $testimonial -> desc = request('desc');
        $testimonial -> link = request('link');

        $testimonial->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $testimonial = Testimonial::find($id);
        
        // if (request('name') != NULL) {
        //     $testimonial -> name = request('name');
        //     $testimonial ->save();
        // } else if (request('job') != NULL) {
        //     $testimonial -> job = request('job');
        //     $testimonial ->save();
        // } else if (request('desc') != NULL){
        //     $testimonial -> desc = request('desc');
        //     $testimonial ->save();
        // } else if (request('link') != NULL){
        //     $testimonial -> link = request('link');
        //     $testimonial ->save();
        // }

        //V2
        $testimonial -> name = request('name');
        $testimonial ->save();
        $testimonial -> job = request('job');
        $testimonial ->save();
        $testimonial -> desc = request('desc');
        $testimonial ->save();
        $testimonial -> link = request('link');
        $testimonial ->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->back();
    }
}
