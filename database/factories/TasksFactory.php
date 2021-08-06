<?php

namespace Database\Factories;

use App\Models\Projects;
use App\Models\Tasks;
use Illuminate\Database\Eloquent\Factories\Factory;

class TasksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tasks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'project_id' => Projects::factory(),
            'is_completed' => $this->faker->boolean,
        ];
    }
}