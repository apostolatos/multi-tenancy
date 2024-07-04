<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;
use App\Models\Company;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve existing users and companies
        $users = User::all();
        $companies = Company::all();

        // Define sample projects data
        $projects = [
            [
                'name' => 'Project Alpha',
                'description' => 'Description for Project Alpha',
                'creator_id' => $users->first()->id, // Assuming first user
                'company_id' => $companies->first()->id, // Assuming first company
            ],
            [
                'name' => 'Project Beta',
                'description' => 'Description for Project Beta',
                'creator_id' => $users->last()->id, // Assuming last user
                'company_id' => $companies->last()->id, // Assuming last company
            ],
            // Add more projects as needed
        ];

        // Insert projects into database
        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
