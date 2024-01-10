<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MeowController extends Controller
{
    public function showPosts()
    {
        $posts = Post::all();
        return view('meows-list', compact('posts'));
    }


    public function showPost(string $id)
    {
        $post = Post::find($id);

        $response = Gate::inspect('read-post', $post);

        if ($response->allowed()) {
            return view('meow-details', ['post' => $post]);
        } else {
            return $response->message();
        }
    }
}
