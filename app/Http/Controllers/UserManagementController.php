<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('user_management', [
            'users' => $users
        ]);
    }
}
