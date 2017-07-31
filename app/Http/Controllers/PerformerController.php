<?php

namespace App\Http\Controllers;

use App\Performer;
use Illuminate\Http\Request;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('performer.home');
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
     * @param  \App\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function show(Performer $performer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function edit(Performer $performer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Performer $performer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Performer $performer)
    {
        //
    }
}
