<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('projects');

        foreach ($projects as $project) {
            $new_project = new Project;

            $new_project->name = $project['name'];
            $new_project->img = $project['img'];
            $new_project->description = $project['description'];
            $new_project->programming_lang = implode(", ", $project['programming_lang']);

            $new_project->save();
        }
    }
}
