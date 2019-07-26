<?php

namespace App\Http\Controllers;

use App\User;
use App\Frame;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
    public function index(User $user)
    {
        $users = auth()->user()->frames()->pluck('frames.user_id');
        $frames = Frame::whereIn('user_id', $users)->with('user')->latest()->paginate(6);
        return view('home', compact('frames'));
    }

    public function barcode()
    {
        return view('barcode');
    }
}
