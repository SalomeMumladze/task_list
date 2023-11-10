@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>{{$task->description}}</p>

@if($task->description2)
    <p>{{$task->description2}}</p>
@endif

<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>
<form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection