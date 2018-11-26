@extends('layouts.app')

@section('content')

    <h1>タスクの詳細ページ</h1>
    
    <table class="table table-striped">
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
            <th>状況</th>
            <td>{{ $task->status }}</td>
    </table>
    
    {!! link_to_route('tasks.edit','編集する',[
        'id' => $task->id],['class' => 'btn btn-default glyphicon glyphicon-wrench']) !!}
        
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-info']) !!}
    {!! Form::close() !!}
@endsection