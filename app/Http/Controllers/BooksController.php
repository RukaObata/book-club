<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;
use DB;

class BooksController extends Controller
{
    public function mypage()
    {
        if (\Auth::check()){
            //$user = \Auth::user();
            //$books = $user->books()->orderBy('created_at', 'desc')->paginate(5);

            return view('users.mypage');
        }else {
            return view('welcome');
        }
        
        
    }
    
    public function index()
    {
        $id = \Auth::user()->id;
        $user = User::findOrFail($id);
        
        $books_data = $user->books()->paginate(10);
        
        return view('books.index', [
            "books_data" =>$books_data,
            ]);
    }
}
