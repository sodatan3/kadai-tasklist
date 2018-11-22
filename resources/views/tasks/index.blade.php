@extends('layouts.app')

@section('content')

<h1>タスク管理アプリ</h1>
<h2>タスク一覧</h2>

 @if(count($tasks) >0 )
  <ul>
      @foreach($tasks as $task)
      <li>・{!! link_to_route('tasks.show',$task->content,['id' => $task->id]) !!}</li>
      @endforeach
  </ul>
  @endif
  
  {!! link_to_route('tasks.create', 'タスクの登録') !!}

@endsection