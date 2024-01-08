<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function showPosts () {
        return view('meows-list');
    }


    public function showPost(int $id) {
        return view('meow-details', ['id' => $id]);
    }
}
