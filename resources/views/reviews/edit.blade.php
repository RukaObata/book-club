@extends('layouts.app')
@section('content')
    <div class='container-fluid'>
        <div class='row'>
            @include('commons.menubar')
            <div class='mt-4 mb-4'>
                <h4>レビューの編集</h4>
            </div>
            {{-- 本の詳細情報 --}}
            {{-- 本の書影 --}}
            <img src= "{{ $data->book_pic }}" >
            {{ $data->title }}
            {{ $data->author }}
            {{ $data->publisher }}
            {{ $data->pub_date }}
            
            
        </div>
    
    </div>
@endsection

