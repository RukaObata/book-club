@extends('layouts.app')

<div class='container-fluid'>
    <div class='row'>
        @include('commons.menubar')
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- ユーザ一覧 --}}
            @include('users.users')
        </div>
    </div>
</div>