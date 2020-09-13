@extends('layouts.app')
<div class='container-fluid'>
    <div class='row'>
        {{-- @include('commons.menubar') --}}
        <h5>登録完了</h5>
        
        {{-- マイページへ戻るボタン --}}
        <a class="btn btn-primary" href="/" role="button">マイページ</a>
        
        {{-- 登録画面へ戻るボタン --}}
        <a class="btn btn-primary" href="books/serch" role="button">もう一冊登録する</a>
    </div>
</div>