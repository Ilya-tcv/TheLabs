<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\NavTitre;
use App\NavLogo;
use App\Intro;
use App\About;
use App\AboutSection;
use App\Form;
use App\Promotion;
use App\ServiceSection;
use App\Team;
use App\Testimonial;
use App\Title;
use App\Video;
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
        $aboutSection = AboutSection::all();
        $video = Video::all();
        $testimonial = Testimonial::all();
        $service = ServiceSection::all();
        $team = Team::all();
        $promotion = Promotion::all();
        $contact = Form::all();
        $title = Title::all();
    
        return view('index', compact('NavTitre', 'NavLogo', 'intro', 'about', 'aboutSection', 'video', 'testimonial', 'service', 'team', 'promotion', 'contact', 'title'));
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

    public function indexAll()
    {
        // Vars
        $NavTitre = NavTitre::all();
        $NavLogo = NavLogo::all();
        $intro = Intro::all();
        $about = About::all();
        $aboutSection = AboutSection::all();
        $video = Video::all();
        $testimonial = Testimonial::all();
        $service = ServiceSection::all();
        $team = Team::all();
        $promotion = Promotion::all();
        $contact = Form::all();
        $title = Title::all();
    
        return view('backoffice.welcome', compact('NavTitre', 'NavLogo', 'intro', 'about', 'aboutSection', 'video', 'testimonial', 'service', 'team', 'promotion', 'contact', 'title'));
    }
}
