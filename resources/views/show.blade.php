@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>{{$task->description}}</p>

@if($task->description2)
    <p>{{$task->description2}}</p>
@endif

<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>
@endsection