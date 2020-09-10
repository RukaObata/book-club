@extends('layouts.app')
<div class='container-fluid'>
    <div class='row'>
        @include('commons.menubar')
        <div class-'col-md-10'>
            @if (Auth::check())
        {{ Auth::user()->name }}
    @endif
        </div>
    </div>
</div>