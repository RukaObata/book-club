@extends('layouts.app')
    <div class='container-fluid'>
        <div class='row'>
            @include('commons.menubar')
            <div class='col-md-10'>
                <h2>本の登録確認</h2>
                {{ $data->isbn }}
                {{ $data->book_pic }}
                {{ $data->title }}
                {{ $data->author }}
                {{ $data->publisher }}
                {{ $data->pub_date }}
                
                
                
                {!! Form::open(['route' => 'books.store']) !!}
                
                {{ Form::hidden('book_id', $data->id) }}
                
                
                この本をおすすめする
                {{-- ラジオボタン　--}}
                はい{{ Form::radio('recommendation', '1', true) }}
                いいえ{{ Form::radio('recommendation', '0') }}
                
                この本のレビューを書く
                {{-- テキストボックス --}}
                {{ Form::textarea('content') }}
                
                {{-- 戻るボタン(登録画面へ遷移 ) --}}
                <a class="btn btn-primary" href="/books/serch" role="button">戻る</a>
                
                {{-- おすすめとレビューを保存して登録完了画面へ遷移 --}}
                {{ Form::submit('登録') }}
                {{ Form::close() }}
                
            
            </div>
        </div>
    </div>