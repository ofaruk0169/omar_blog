<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagination extends Controller
{
    //
    function show() {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(3);
        // $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts'=>$posts]);
    }
}
