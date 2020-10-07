<?php

namespace App\Http\Controllers;

use App\Claim;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claims = Claim::where('user_id', auth()->id())->get();

        return view('home', compact('claims'));
    }
}
