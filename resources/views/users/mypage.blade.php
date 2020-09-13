@extends('layouts.app')
@section('content')
    <div class='container-fluid'>
        <div class='row'>
            @include('commons.menubar')
            <div class-'col-md-10'>
                @if (Auth::check())
                    私の今のおすすめの本
                    <img src="{{ $latest_one->book_pic }}">
                    {{ $latest_one->title }}
                    {{ $latest_one->author }}
                    {{ $latest_one->publisher }}
                    {{ $latest_one->pub_date }}
                @endif
                
                
            </div>
        </div>
    </div>
@endsection
