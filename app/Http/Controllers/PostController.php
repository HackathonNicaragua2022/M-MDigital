<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function single($id)
    {
        $post = Post::with('user')->find($id);
        return view('single', compact('post'));
    }

    public function destroy(Post $post)
    {
        Storage::delete($post->image);

        $post->delete();

        return back()->with('status', 'The post deleted successfully.');
    }

   
}
