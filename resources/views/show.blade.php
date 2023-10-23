@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-4">
        <a href="{{ route('tasks.index') }}" class="link">← Go Back</a>
    </div>
    <p class="mb-4 text-slate-700">{{ $task->description }}</p>
    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
    @endif
    <p class="mb-4 text-slate-500">Created {{ $task->created_at->diffForHumans() }} . Updated
        {{ $task->updated_at->diffForHumans() }}
    <p>
    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Not Completed</span>
        @endif
    </p>

    <div class="flex gap-x-3">
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn bg-yellow-100">Edit</a>

        <form method="POST" action="{{ route('tasks.toggleComplete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit" class="btn {{ $task->completed ? 'bg-orange-200' : 'bg-green-200' }}">
                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>

        <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn bg-red-200">Delete Task</button>
        </form>
    </div>
@endsection
