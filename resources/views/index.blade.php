@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

<div>
    @forelse ($tasks as $task)
    <a href="{{route('tasks.show', ['id'=> $task->id])}}">
        <p>{{$task->title}}</p>
    </a>
    @empty
        <p>no tasks</p>
    @endforelse
</div>

@endsection