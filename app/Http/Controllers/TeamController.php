<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
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
        $team = new Team();
        
        // STORE
        $team -> title = request('title');
        $team -> job = request('job');
        
        // storage
        $img = $request-> link;  // récupere l'image
        $filename = Storage::disk('public')->put('', $img);
        $team -> link = $filename;

        $team->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        
        // V2
        $team -> title = request('title');
        $team ->save();
        $team -> job = request('job');
        $team ->save();
        

        if($request->hasFile('link')){
            // delete la copie dans le storage
            Storage::disk('public')->delete($team->link);

            // storage
            $img = request('link');  // récupere l'image
            $filename = Storage::disk('public')->put('', $img);
            $team -> link = $filename;
            
            $team->save();
        }
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::where('id', $id)->delete();
        return redirect()->back();
    }
}
