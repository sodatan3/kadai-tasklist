@extends('layouts.app')

@section('content')

    <h1>新規タスク登録ページ</h1>
    
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task,['route' => 'tasks.store']) !!}
                
            <div class="form-grouo">
                {!! Form::label('content','タスク:') !!}
                {!! Form::text('content',null,['class' => 'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('status','状況:') !!}
                {!! Form::text('status',null,['class' => 'form-control']) !!}
            </div>
            
                {!! Form::submit('登録',['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection