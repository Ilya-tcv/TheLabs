<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        
        // STORE
        $testimonial -> name = request('name');
        $testimonial -> job = request('job');
        $testimonial -> desc = request('desc');
        
        // storage
        $img = $request-> link;  // récupere l'image
        $filename = Storage::disk('public')->put('', $img);
        $testimonial -> link = $filename;

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
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        
        // V2
        $testimonial -> name = request('name');
        $testimonial ->save();
        $testimonial -> job = request('job');
        $testimonial ->save();
        $testimonial -> desc = request('desc');
        $testimonial ->save();
        

        if($request->hasFile('link')){
            // delete la copie dans le storage
            Storage::disk('public')->delete($testimonial->link);

            // storage
            $img = request('link');  // récupere l'image
            $filename = Storage::disk('public')->put('', $img);
            $testimonial -> link = $filename;
            
            $testimonial->save();
        }
        
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
