<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Book;
use DB;
use App\Review;

class BookRegisterController extends Controller
{
    public function showRegisterForm()
    {
        if (\Auth::check()){
            $user = \Auth::user();
            return view('books.register',[
                'user' => $user
            ]);
        }
    }
    
    public function getBooksData(Request $request)
    {
        $value = $request['isbn'];
        
        $data_serch = DB::table('books')->where('isbn', $value)->exists();
        
        if ($data_serch == true){
            $data = DB::table('books')->where('isbn', $value)->first();
            
            return view('books.confirm', [
                "data" => $data
            ]);
        }else {
            $base_url = 'https://api.openbd.jp/v1/get?isbn=';
        
            $response = file_get_contents(
            $base_url . $value
            );
        
            $result = json_decode($response,false);
            
            
            $isbn = $result[0]->summary->isbn;
            $title = $result[0]->summary->title;
            $publisher = $result[0]->summary->publisher;
            $pubdate = $result[0]->summary->pubdate;
            $author = $result[0]->summary->author;
            $cover = $result[0]->summary->cover;
            $user = \Auth::user();
            
            Book::create([
                "isbn" => $isbn,
                "title" => $title,
                "publisher" => $publisher,
                "pub_date" => $pubdate,
                "author" => $author,
                "book_pic" => $cover,
            ]);
            
            $data = DB::table('books')->where('isbn', $value)->first();
            
            return view('books.confirm', [
                "data" => $data
            ]);
        }
        
    }
    

    public function store(Request $request)
    {
        
        /**
         * 
        if ($request->recommendation == 1){
            $value = true;
            return $value;
        }else{
            $value = false;
            return $value;
        };
        */
        
        Review::create([
            "user_id" => \Auth::user()->id,
            "book_id" => $request->book_id,
            "recommendation" => $request->recommendation,
            "content" => $request->content,
            ]);
        
        //登録完了画面へ遷移
        return view('books.done');
    }
}
