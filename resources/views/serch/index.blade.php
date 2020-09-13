@extends('layouts.app')
<div class='container-fluide'>
    <div class='row'>
        @include('commons.menubar')
        
        <h5>さがす</h5>
        
        {!! Form::open(['route' => 'serch.serching']) !!}
        
        {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
        {!! Form::submit('検索') !!}
        
        {!! Form::close() !!}
        
    </div>
</div>
