@extends('layouts.app')
<div class='container-fluid'>
    <div class='row'>
        @include('commons.menubar')

    @if (count($users)>0)
    
        @foreach($users as $a_user)
        <div>
            ユーザー検索結果
            {{ $a_user->name }}
            {{ $a_user->id }}
        
        </div>
        @endforeach
    @endif
    
    @if (count($books_data)>0)
    
        @foreach($books_data as $a_book)
        <div>
            <img src="{{ $a_book->book_pic }}">
            {{ $a_book->title }}
            {{ $a_book->author }}
            {{ $a_book->publisher }}
            {{ $a_book->pub_date }}
        
        </div>
        @endforeach
    @endif
    
    @if (count($authors_books)>0)
    
        @foreach($authors_books as $a_author_book)
        <div>
            <img src="{{ $a_author_book->book_pic }}">
            {{ $a_author_book->title }}
            {{ $a_author_book->author }}
            {{ $a_author_book->publisher }}
            {{ $a_author_book->pub_date }}
        
        </div>
        @endforeach
    @endif
    </div>

</div>

