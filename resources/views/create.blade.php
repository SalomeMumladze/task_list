@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <form method='POST' action="{{route('tasks.store')}}">
        @csrf
        <div>
            <label for="title">
            Title
            </label>
            <input type="text" name="title" id="title" />
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>

        <div>
            <label for="description2">Long Description</label>
            <textarea name="description2" id="description2" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>

@endsection