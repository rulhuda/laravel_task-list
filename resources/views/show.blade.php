@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>Description: {{ $task->description }}</p>
    @if ($task->long_description)
        <p>Long Description: {{ $task->long_description }}</p>
    @endif
    <p>Completed: {{ $task->completed }}</p>
    <p>Created At: {{ $task->created_at }}</p>
    <p>Updated At: {{ $task->updated_at }}</p>
@endsection
