<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Record;

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
        // バリデーション
        $request->validate([
            'keyword' => 'required|max:255',
        ]);
        $user = \Auth::user();
        $user_name = $request['keyword'];
        $title = $request['keyword'];
        $author = $request['keyword'];
        
        Record::create([
            'user_id' => $user->id,
            'content' => $request['keyword']
        ]);
        
        $record_count = DB::table('records')->where('user_id', $user->id)->count();
        dd($record_count);
        

        
        $users = DB::table('users')->where('name', $user_name)->get();
        $books_data = DB::table('books')->where('title', $title)->get();
        $authors_books = DB::table('books')->where('author', $author)->get();
        
        return view('serch.result', [
            "user" => $user,
            "users" => $users,
            "books_data" => $books_data,
            "authors_books" => $authors_books
        ]);
    }
}
