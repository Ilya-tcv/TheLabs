<?php

namespace App\Http\Controllers;

use App\NavTitre;
use Illuminate\Http\Request;

class NavTitreController extends Controller
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
        $NavTitre = new NavTitre();

        $NavTitre -> title = request('title');
        $NavTitre -> link = request('link');

        $NavTitre->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NavTitre  $navTitre
     * @return \Illuminate\Http\Response
     */
    public function show(NavTitre $navTitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NavTitre  $navTitre
     * @return \Illuminate\Http\Response
     */
    public function edit(NavTitre $navTitre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NavTitre  $navTitre
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $NavTitre = NavTitre::find($id);
        $NavTitre -> title=request('title');
        $NavTitre ->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NavTitre  $navTitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(NavTitre $navTitre)
    {
        //
    }
}
