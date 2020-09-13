@extends('layouts.app')
<div class='container-fluid'>
    <div class='row'>
        @include('commons.menubar')
        <div class-'col-md-10'>
            @if (Auth::check())
                私の今のおすすめの本
                {{ $latest_one->title }}
                {{ $latest_one->author }}
                {{ $latest_one->publisher }}
                {{ $latest_one->pub_date }}
            @endif
            
            
        </div>
    </div>
</div>