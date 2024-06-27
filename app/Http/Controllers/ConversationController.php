<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Chatify\Facades\ChatifyMessenger as Chatify;

class ConversationController extends Controller

{
    public function index()
    {
        $conversations = Chatify::getAllConversations();
        return view('inbox', compact('conversations'));
    }

    public function show($id)
    {
        $conversation = Chatify::getConversationMessagesById($id);
        $participants = Chatify::getConversationParticipants($id);
        return view('conversation', compact('conversation', 'participants'));
    }

    public function userChat()
    {
        $user = auth()->user();

        $chatUrl = 'http://127.0.0.1:8000/chatifychat?user_id=' . $user->id;

        return redirect()->to($chatUrl);
    }

    public function agentChat()
    {
        $agent = auth()->user();

        $chatUrl = 'http://127.0.0.1:8000/chatify/chat?agent_id=' . $agent->id;

        return redirect()->to($chatUrl);
    }
}




