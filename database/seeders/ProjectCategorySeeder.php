<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::inRandomOrder()->limit(3);
        $projects = Project::all();

        foreach ($projects as $project)
        {
            foreach ($categories as $category)
            {
                ProjectCategory::create([
                    'project_id'=>$project->id,
                    'category_id'=>$category->id,
                ]);
            }
        }
    }
}
