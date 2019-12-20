<?php

namespace App\Http\Controllers;

use App\Jam;
use Illuminate\Http\Request;

class JamController extends Controller
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
     * @param  \App\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function show(Jam $jam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function edit(Jam $jam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jam $jam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jam $jam)
    {
        //
    }

    public function jam_sessions () {

        $query = Jam::where('type', '=', 'jam_session')->get();

        return $query;
    }

    public function jam_session (Jam $jam) {

        if($jam->type != 'jam_session') {
            abort(404);
        }
        $jam->load('sinergias', 'city', 'user');

        return $jam;

    }

    public function open_mics () {

        $query = Jam::where('type', '=', 'open_mic')->get();

        return $query;
    }

    public function open_mic (Jam $jam) {

        if($jam->type != 'open_mic') {
            abort(404);
        }

        $jam->load('sinergias', 'city');

        return $jam;

    }

}
