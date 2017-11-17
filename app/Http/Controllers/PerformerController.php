<?php

namespace App\Http\Controllers;

use App\Performer;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.

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
        $performing = $request->performing == 'true' ? true : false;
        DB::update('update Users set performing = ? WHERE id = ?', [$performing, $id]);

        if($performing == true){
            //Perform has started so insert data in table without ending date
            $result = Performer::create([
                'user_id' => $id,
                'start_performing' => date('Y-m-d H:i:s'),
                'end_performing' => null,
                'earning' => 200
            ]);
            //I should return id of the latest entry
            $performId = $result->id;
            return response()->json($performId);

        } else {
            //Look for existing row and populate ending date.
            $userId = Auth::user()->id;
            $currentDate = date('Y-m-d H:i:s');
            DB::update('update Performers set end_performing = ? WHERE user_id = ?', [$currentDate, $userId]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $userId = $request->id;
        return view('performer.home');
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
