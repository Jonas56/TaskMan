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

        // $project = Projects::where('slug', $slug)->get();
        // $tasks = Tasks::where([
        //     ['projects_id', "=", $project[0]->id],
        //     ['is_completed', "=", 1],
        // ])->get();

        $tasks = Tasks::activeTasks($slug)->get();

        return view('tasks', [
            'tasks' => $tasks,
            'project' => Projects::where('slug', $slug)->get(),
        ]
        );
    }
}