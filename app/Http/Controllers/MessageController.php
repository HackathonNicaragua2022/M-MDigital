<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index($userId)
    {
        if ($userId == auth()->id()) {
            return back();
        }
        
        $receiver = User::find($userId);
        return view('messages', compact('receiver'));
        
    }

    public function messague($id) {
        $post = Post::with('user')->find($id);
    }

    
}

