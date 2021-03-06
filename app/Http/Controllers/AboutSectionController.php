<?php

namespace App\Http\Controllers;

use App\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function show(AboutSection $aboutSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutSection $aboutSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $aboutSection = AboutSection::find($id);

        if (request('btn') != NULL) {
            $aboutSection -> btn = request('btn');
            $aboutSection ->save();
        } else if (request('desc1') != NULL) {
            $aboutSection -> desc1 = request('desc1');
            $aboutSection ->save();
        } else if (request('desc2') != NULL){
            $aboutSection -> desc2 = request('desc2');
            $aboutSection ->save();
        }
        

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutSection $aboutSection)
    {
        //
    }
}
