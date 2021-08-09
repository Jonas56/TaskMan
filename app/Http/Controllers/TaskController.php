<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Tasks;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    public function create($slug)
    {
        // validate user input
        $attributes = request()->validate([
            'title' => 'required|min:8|max:255',
        ]);
        $attributes['slug'] = Str::slug($attributes['title']);

        $project = Projects::where('slug', $slug)->get();
        Tasks::create([
            'title' => $attributes['title'],
            'slug' => $attributes['slug'],
            'projects_id' => $project[0]->id,
        ]);

        return redirect("/projects/$slug");

    }

    public function delete($slug)
    {
        $project = Tasks::where('slug', $slug)->get();
        $my_project = Projects::where('id', $project[0]->projects_id)->get();

        $task = Tasks::where('slug', $slug)->delete();

        return redirect("/projects/" . $my_project[0]->slug);
    }
}