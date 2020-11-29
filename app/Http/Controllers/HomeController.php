<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $id    =   auth()->user()->id;
        $user    =   User::find($id);
        if ($user->role_id == 1) {
            return view('user-profile')->with([
                'user'   =>   $user,
            ]);
        } else {
            return view('frontend.nurse-profile')->with([
                'user'   =>   $user,
            ]);
        }
    }
}
