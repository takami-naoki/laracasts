@extends('layouts.app')

@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-sm text-default">
                <a href="/projects">New Project</a> / {{ $project->title }}
            </p>

            <div class="flex items-center">
                @foreach ($project->members as $member)
                    <img src="{{ gravatar_url($member->email) }}" alt="" class="rounded-full w-8 mr-2">
                @endforeach
                    <img src="{{ gravatar_url($project->owner->email) }}" alt="" class="rounded-full w-8 mr-2">
                <a href="{{ $project->path() . '/edit' }}" class="button ml-4">Edit Project</a>
            </div>

        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-6">
                    <h2 class="text-default text-lg mb-3">Tasks</h2>

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf

                                <div class="flex">
                                    <input name="body" value="{{ $task->body }}" class="bg-card text-default w-full {{ $task->completed ? 'text-default' : '' }}">
                                    <input name="completed" type="checkbox" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input placeholder="Add a new task..." class="w-full text-default" name="body">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-default text-lg mb-3">General Notes</h2>
                    <form method="POST" action="{{ $project->path() }}">
                        @csrf
                        @method('PATCH')
                        <textarea name="notes" class="card w-full mb-5" style="min-height: 200px;" placeholder="Anything special that you want to make a note of">{{ $project->notes }}</textarea>
                        <button type="submit" class="button">Save</button>
                    </form>

                    @include('errors')
                </div>

            </div>

            <div class="lg:w-1/3 px-3">
                @include('projects.card')

                @include('projects.activity.card')

                @can ('manage', $project)
                    @include('projects.invite')
                @endif
            </div>
        </div>
    </main>
@endsection
