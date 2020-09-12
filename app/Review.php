<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['content','recommendation', 'user_id', 'book_id'];
    
    /**
     * このレビューに対する本。(Bookモデルとの関係性を定義)
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    
    /**
     * このレビューのユーザ。(Userモデルとの関係性を定義)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
