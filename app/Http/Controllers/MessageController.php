<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;



class MessageController extends Controller
{
    public function showForm()
    {
        return view('sendform');
    }

    public function storeMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'message' => 'required|min:8|max:1000',
        ]);

        Message::create([
            'sender_name' => $validated['name'],
            'sender_message' => $validated['message'],
        ]);

        return redirect('/messages');
    }

    public function showMessages()
    {
        return view('messages', ['messages' => Message::all()]);
    }
}
