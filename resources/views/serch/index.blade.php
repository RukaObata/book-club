@extends('layouts.app')
<div class='container-fluid'>
    <div class='row'>
        @include('commons.menubar')
        
        <h5>さがす</h5>
        
        <div class='form-group d-flex flex-row mb-5'>
            {!! Form::open(['route' => 'serch.serching']) !!}
        
            {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
            {!! Form::submit('検索') !!}
        
        {!! Form::close() !!}
        </div>
        
        
    </div>
</div>
