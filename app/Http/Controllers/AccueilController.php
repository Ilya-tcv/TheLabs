<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\NavTitre;
use App\NavLogo;
use App\Intro;
use App\About;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Vars
        $NavTitre = NavTitre::all();
        $NavLogo = NavLogo::all();
        $intro = Intro::all();
        $about = About::all();
    
        return view('index', compact('NavTitre', 'NavLogo', 'intro', 'about'));
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
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show(Accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit(Accueil $accueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accueil $accueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accueil $accueil)
    {
        //
    }
}
