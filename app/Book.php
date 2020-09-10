<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['isbn','title','author','publisher','pub_date','book_pic'];
    
    /**
     * この本を登録しているユーザ。(Userモデルとの関係を定義)
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    /**
     * この本が持つレビュー。(Reviewモデルとの関係を定義)
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
