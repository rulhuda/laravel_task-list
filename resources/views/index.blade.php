@extends('layouts.app')

@section('title', 'The List of Tasks')

@section('content')
    <div>
        <div>There are tasks!</div>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
            {{-- <p>Description: {{ $task->description }}</p>
      <p>Long Description: {{ $task->long_description }}</p>
      <p>Completed: {{ $task->completed }}</p>
      <p>Created At: {{ $task->created_at }}</p>
      <p>Updated At: {{ $task->updated_at }}</p> --}}
        @empty
            <div>There are no tasks!</div>
        @endforelse
    </div>
@endsection
