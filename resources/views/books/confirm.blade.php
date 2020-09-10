@extends('layouts.app')
    <div class='containar-fluid'>
        <div class='row'>
            @include('commons.menubar')
            <div class='col-md-10'>
                <h2>本の登録確認</h2>
                {{ $isbn }}
                {{ $cover }}
                {{ $title }}
                {{ $author }}
                {{ $publisher }}
                {{ $pubdate }}
                
            </div>
        </div>
    </div>