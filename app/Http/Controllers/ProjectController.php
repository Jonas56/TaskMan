<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Tasks;

class ProjectController extends Controller
{
    public function index()
    {
        // Select all projects from the db and pass it as a parameter into the projects page
        $projects = Projects::where('is_completed', false)
            ->orderBy('created_at', 'desc')
            ->withCount(['tasks' => function ($query) {
                $query->where('is_completed', false);
            }])
            ->get();

        // ddd($projects);

        return view('projects',
            ['projects' => $projects]
        );
    }

    public function show($slug)
    {
        $tasks = Tasks::activeTasks($slug)->get();
        return view('tasks', [
            'tasks' => $tasks,
            'project' => Projects::where('slug', $slug)->get(),
        ]
        );
    }

    public function markAsCompleted($slug)
    {
        $project = Projects::where('slug', $slug)->get();
        $project[0]->is_completed = true;
        $project[0]->update();
        return redirect('/');
    }

    public function create()
    {
        // validate user input
        $attributes = request()->validate([
            'name' => 'required|min:8',
            'description' => 'required|min:10',
        ]);

        $project = Projects::create([
            'name' => $attributes['name'],
            'description' => $attributes['description'],
        ]);

        return redirect('/');
    }

}