@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
  <style>
    .error-message {
      color: red;
      font-size: 0.8rem;
    }
  </style>
@endsection

@section('content')
    <form method='POST' action="{{route('tasks.store')}}">
        @csrf
        <div>
            <label for="title">
            Title
            </label>
            <input type="text" name="title" id="title"  value="{{old('title')}}"/>
            @error('title')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{old('description')}}</textarea>
            @error('description')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>

        <div>
            <label for="description2">Long Description</label>
            <textarea name="description2" id="description2" rows="10">{{old('description2')}}</textarea>
            @error('description2')
            <p class="error-message">{{ $message }}</p>
          @enderror
        </div>

        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>

@endsection