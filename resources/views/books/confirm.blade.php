@extends('layouts.app')
    <div class='container-fluid'>
        <div class='row flex-row d-flex'>
            @include('commons.menubar')
            <div class='col-md-10'>
                <div class='col-md-4'>
                    <h2>本の登録確認</h2>
                </div>
                <div class='col-md-6'></div>
                <div class='col-md-4 mt-3'>
                    <h5>ISBN:{{ $data->isbn }}</h5>
                </div>
                <div class='col-md-6'></div>
                <div class='col-md-10'>
                    {{ $data->book_pic }}
                    {{ $data->title }}
                    {{ $data->author }}
                    {{ $data->publisher }}
                    {{ $data->pub_date }}
                </div>
                
                
                
                
                {!! Form::open(['route' => 'books.store']) !!}
                
                {{ Form::hidden('book_id', $data->id) }}
                
                <div class='col-md-6'>
                    <h6>この本をおすすめする</h6>
                </div>
                <div class='col-md-3'>
                    {{-- ラジオボタン　--}}
                    はい{{ Form::radio('recommendation', '1', true) }}
                    いいえ{{ Form::radio('recommendation', '0') }}
                </div>
                
                <div class='col-md-10'>
                    <h6>この本のレビューを書く</h6>
                    {{-- テキストボックス --}}
                    {{ Form::textarea('content') }}
                </div>
                
                
                
                {{-- 戻るボタン(登録画面へ遷移 ) --}}
                <a class="btn btn-danger" href="/books/serch" role="button">戻る</a>
                
                {{-- おすすめとレビューを保存して登録完了画面へ遷移 --}}
                {{ Form::submit('登録') }}
                {{ Form::close() }}
                
            
            </div>
        </div>
    </div>