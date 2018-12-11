@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>To Do List</h1>
            <h3>Improve your life with this app</h3>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-info']) !!}
        </div>
        

