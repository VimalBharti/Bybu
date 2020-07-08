<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Join;

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
        $joins = Join::orderBy('created_at', 'desc')->get();
        return view('home', compact('joins'));
    }

    public function newPost()
    {
        return view('newPost');
    }
}
