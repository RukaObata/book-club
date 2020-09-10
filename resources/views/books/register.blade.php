@extends('layouts.app')
    
    <div class='containar-fluid'>
        <div class='row'>
            @include('commons.menubar')
            <div class='col-md-10'>
                <h2>本の登録</h2>
                <div class='col-md-6'>
                    {!! Form::open(['route' => 'book.post']) !!} 
                    
                    <div class='form-group'>
                        {!! Form::label('isbn','ISBN') !!}
                        {!! Form::text('isbn', null, ['class' => 'form-control']) !!}
                        <small id="isbnHelp" class="form-text text-muted">本のバーコード下にある13桁の数字を入力してください。</small>
                        
                        {!! Form::submit('検索') !!}
                        
                    </div>
                {!! Form::close() !!}
                </div>
                
             
            </div>
        </div>
        
    </div>
