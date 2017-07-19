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

    //Upload profile picture
    public function uploadProfilePicture()
    {
        //no errors... good
        $validFile = true;
        if( $_FILES['profilePicture']['name'] ) {
            //Don't want to use tmp name here
            //$newFileNameWithPath = strtolower($_FILES['profilePicture']['tmp_name']);;
            if( $_FILES['profilePicture']['size'] > 1024000 ){
                $validFile = false;
                $message = 'Oops! Your file\'s size is to large';
            }
            $baseDir = 'C:/wamp/www/camscript/uploads/'; //I'll make dynamic later, need to get out now
            if($validFile) {
                move_uploaded_file($_FILES['profilePicture']['tmp_name'], $baseDir . $_FILES['profilePicture']['name']);
                $message = 'Congratulations! Your file was accepted';
            }
        } else {
            $message = 'Oops! Your upload triggered the following error: ' . $_FILES['profilePicture']['error'];
        }

        session()->flash('message', $message);
        return view('performer.home');

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
