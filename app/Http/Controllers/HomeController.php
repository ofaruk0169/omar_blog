<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use App\Post;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        
        // return view('home')->with('posts', $user->posts);

        $posts = DB::select('SELECT * FROM posts');
        return view('home')->with('posts', $posts);
    }
}