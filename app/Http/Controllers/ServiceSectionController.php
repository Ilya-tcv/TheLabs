<?php

namespace App\Http\Controllers;

use App\ServiceSection;
use Illuminate\Http\Request;

class ServiceSectionController extends Controller
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
        $service = new ServiceSection();
        // STORE
        $service -> title = request('title');
        $service -> desc = request('desc');
        $service -> icon = request('icon');

        $service->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSection $serviceSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceSection $serviceSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $service = ServiceSection::find($id);
        
        $service -> title = request('title');
        $service ->save();
        $service -> desc = request('desc');
        $service ->save();
        $service -> icon = request('icon');
        $service ->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceSection  $serviceSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceSection::where('id', $id)->delete();
        return redirect()->back();
    }
}
