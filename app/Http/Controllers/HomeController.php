<?php

namespace App\Http\Controllers;

use App\information;
use Illuminate\Http\Request;

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
        $information = Information::all();
        return view('home', compact('information'));
    }

    public function show(Request $request)
    {
         
    }
}
