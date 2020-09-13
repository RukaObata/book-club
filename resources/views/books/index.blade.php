@extends('layouts.app')
<div class='container-fluid'>
    <div class='row'>
        @include('commons.menubar')
        @if(count($books_data)>0)
            @foreach($books_data as $book_data)
                {{ $book_data->created_at }}
                <img src="{{ asset('book_pic/' . $book_data->book_pic) }}" alt="書影">
                {{ $book_data->book_pic }}
                {{ $book_data->title }}
                {{ $book_data->author }}
                {{ $book_data->publisher }}
                {{ $book_data->pub_date }}
            @endforeach
        @endif
        
    </div>
</div>


    