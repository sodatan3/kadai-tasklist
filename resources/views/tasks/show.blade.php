@extends('layouts.app')

@section('content')

    <h1>タスクの詳細ページ</h1>
    
    <p>{{Form::checkbox('check')}}{{ $task->status }}:{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit','編集する',[
        'id' => $task->id]) !!}
        
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection