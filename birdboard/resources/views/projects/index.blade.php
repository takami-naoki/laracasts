@extends('layouts.app')

@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-center w-full">
            <h2 class="text-sm text-grey">My Projects</h2>
            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 pb-6 px-3">
                <div class="bg-white p-5 rounded shadow rounded-lg" style="height: 200px;">
                    <h3 class="font-weight-normal text-xl py-4 mb-3 -ml-5 border-l-4 border-blue-light pl-4">
                        <a href="{{ $project->path() }}">{{ $project->title }}</a>
                    </h3>

                    <div class="text-grey">{{ \Illuminate\Support\Str::limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
@endsection
