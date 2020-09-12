<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()){
            $user = \Auth::user();
            //$books = $user->books()->orderBy('created_at', 'desc')->paginate(5);

            return view('users.mypage', [
                "user" => $user,
                ]);
        }else {
            return view('welcome');
        }
        
        
    }
}
