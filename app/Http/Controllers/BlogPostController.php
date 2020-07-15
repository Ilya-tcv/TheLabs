<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\NavTitre;
use App\NavLogo;
use App\Categorie;
use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class BlogPostController extends Controller
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
        $tag = Tag::all();
        $categorie  = Categorie::all();
        $article = Article::all();
    
        return view('blog-post', compact('NavTitre', 'NavLogo', 'tag', 'categorie', 'article'));
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
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }

    public function indexAll()
    {
        // Vars
        $NavTitre = NavTitre::all();
        $NavLogo = NavLogo::all();
        $tag = Tag::all();
        $categorie  = Categorie::all();
        $article = Article::all();
    
        return view('backoffice/blog-post', compact('NavTitre', 'NavLogo', 'tag', 'categorie', 'article'));
    }
}
