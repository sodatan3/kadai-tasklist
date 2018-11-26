@extends('layouts.app')

@section('content')

    <h1>タスクの編集ページ</h1>
    
<div class="row">
    <div class="col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
        {!! Form::model($task,['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        <div class="group-form">
        {!! Form::label('content','タスク:') !!}
        {!! Form::text('content',null,['class'=>'form-control']) !!}
        </div>
        
        <div class="group-form">
        {!! Form::label('status','ステータス:') !!}
        {!! Form::text('status',null,['class'=>'form-control']) !!}
        </div>
        
        
        {!! Form::submit('更新',['class' => 'btn btn-info']) !!}
        
        {!! Form::close() !!}
    </div>
</div>

@endsection