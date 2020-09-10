<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRegisterController extends Controller
{
    public function showRegisterForm()
    {
        if (\Auth::check()){
            return view('books.register');
        }
    }
    
    public function getBooksData(Request $request)
    {
        $value = $request['isbn'];
        
        $base_url = 'https://api.openbd.jp/v1/get?isbn=';
        
        $response = file_get_contents(
            $base_url . $value
        );
        
        $result = json_decode($response,false);
        
        dd($result);
        
        
    }
}
