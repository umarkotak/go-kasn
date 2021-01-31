<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FormalMessagesController extends Controller
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
        $user = Auth::user();

        $my_formal_messages = DB::table('formal_messages')->where('user_id', $user->id)->get();;

        return view('formal_messages', [
            'my_formal_messages' => $my_formal_messages
        ]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        DB::table('formal_messages')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'notes' => $request->notes,
            'user_id' => $user->id,
            'status' => 'created',
            'formal_message_type_id' => 1
        ]);

        return redirect('/formal_messages');
    }
}
