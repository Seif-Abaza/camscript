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
        $id = $request->id;
        $result = Performer::create([
            'user_id' => $id,
            'start_performing' => date('Y-m-d H:i:s'),
            'end_performing' => date('Y-m-d H:i:s'),
            'earning' => 200
        ]);

        //I should return id of the latest entry
        $performId = $result->id;

        return response()->json($performId);
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
