<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class UserController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Save profile picture only
     */
    public function profilePicture()
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

        //Here you need to pass the user along with the message, recap we have, after file has been saved, update the database with the file path
        return view('user.show');

    }
}
