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
        $user = \Auth::user();
        if (\Auth::check()) {
            $user->loadRelationshipCounts();
        }
        
       
        if (\Auth::check() && $user->books_count>0){
            $latest = DB::table('reviews')->where('user_id', $user->id)->where('recommendation', '1')->latest()->first();
            $latest_one = DB::table('books')->where('id', $latest->book_id)->first();
            $followings = $user->followings();
            
            return view('users.mypage',[
                "user" => $user,
                "latest_one" => $latest_one
            ]);
        }else if(\Auth::check()) {
            return view('books.register',[
                "user" => $user,
            ]);
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
            "user" => $user,
            ]);
    }

}
