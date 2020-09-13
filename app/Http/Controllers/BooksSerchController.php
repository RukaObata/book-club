<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksSerchController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        
        return view('serch.index', [
            "user" => $user
        ]);
    }
    
    public function serching(Request $request)
    {
        $user = \Auth::user();
        
        $value = DB::table('users')->where('user_name', $request->keyword)->get();
        
        return view('serch.result', [
            "user" => $user,
            "value" => $value
        ]);
    }
}
