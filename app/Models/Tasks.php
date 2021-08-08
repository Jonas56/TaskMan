<?php

namespace App\Models;

use App\Models\Tasks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    /**
     * Get the projects that owns the Tasks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projects()
    {
        return $this->belongsTo(Projects::class);
    }

    public function scopeActiveTasks($query, $slug)
    {
        $project = Projects::where('slug', $slug)->get();
        return $query->where([
            ['projects_id', "=", $project[0]->id],
            ['is_completed', "=", 0],
        ]);
    }

}