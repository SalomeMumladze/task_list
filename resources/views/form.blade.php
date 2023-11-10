@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
  <style>
    .error-message {
      color: red;
      font-size: 0.8rem;
    }
  </style>
@endsection

@section('content')
  <form method="POST" action="{{ isset($task) ?  route('tasks.update', ['task' => $task->id]) : route('tasks.store')}}">
    @csrf
    @isset($task)
        @method('PUT')
    @endisset
    <div>
      <label for="title">
        Title
      </label>
      <input text="text" name="title" id="title" value="{{isset($task) ? $task->title : old('title')}}" />
      @error('title')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="5"> {{isset($task) ? $task->description : old('description')}}</textarea>
      @error('description')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="description2">Long Description</label>
      <textarea name="description2" id="description2" rows="10">{{isset($task) ? $task->description2 : old('description2')}}</textarea>
      @error('description2')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>

    <div>
        <button type="submit">
            @isset($task) Update Task @else Add Task @endisset
        </button>
    </div>
  </form>
@endsection