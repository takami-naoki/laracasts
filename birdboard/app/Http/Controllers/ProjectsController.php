<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller {

    public function index() {
        $projects = auth()->user()->projects;
        return view('/projects/index', compact('projects'));
    }

    public function show(Project $project) {
        if (auth()->user()->isNot($project->owner)) {
            abort(403);
        }

        return view('/projects/show', compact('project'));
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project = auth()->user()->projects()->create($attributes);

        return redirect($project->path());
    }

    public function create() {
        return view('projects.create');
    }
}
