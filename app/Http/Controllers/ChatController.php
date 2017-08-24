<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
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
        $userId = $request->id;
        $performingId = (int) $request->performingId;
        $textMessage = $request->textMessage;

        if($userId  && $performingId ){

            // 1. Lets check for existing data.
            $chats = DB::table('chats')
                ->where('user_id', $userId)
                ->where('performer_id', $performingId)
                ->first();

            if($chats == null) {
                $result = Chat::create([
                    'user_id' => $userId,
                    'performer_id' => $performingId,
                    'textmessages' => $textMessage,
                    'created_at' => date('Y-m-d H:i:s', strtotime('now')),
                    'updated_at' => date('Y-m-d H:i:s', strtotime('now')),
                ]);
                $result = array(
                    'id' => $result->id,
                    'text' => $result->textmessages
                );
            } else {
                //we need to update instead
                $existingText = $chats->textmessages;
                $chats = Chat::where('id', $chats->id)->first();
                $chats->user_id = $chats->user_id;
                $chats->performer_id = $chats->performer_id;
                $chats->textmessages = $existingText . '\n' . $textMessage . '\n';
                $chats->created_at = $chats->created_at;
                $chats->updated_at = date('Y-m-d H:i:s', strtotime('now'));
                $chats->save();
                $result = array('id' => $chats->id, 'text' => $chats->textmessages);

            }
            //I should return id of the latest entry
            return response()->json($result);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
