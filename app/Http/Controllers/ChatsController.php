<?php

namespace App\Http\Controllers;

use App\Message;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controller\ChatkitController;

class ChatsController extends Controller implements ChatkitController
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.chat.chat');
    }

    public function sender()
    {
        return view('backend.chat.sender');
    }

    public function senderpost()
    {
        $text = request()->text;
        event(new MyEvent($text));
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */

    public function login()
    {
        return view('backend.dashboard.dashboard');
    }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }

    public function sender()
    {
        $text = request()->text;
        echo $this->text = $text;
        event(new MyEvent($text));
    }


    public function __destruct()
    {
        //        $this->middleware('auth');
    }

}
