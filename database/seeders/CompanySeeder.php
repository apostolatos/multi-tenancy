<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run()
    {
        // Seed companies
        $companies = [
            [
                'name' => 'Company A',
                'description' => 'Company A description.',
            ],
            [
                'name' => 'Company B',
                'description' => 'Company B description.',
            ],
            // Add more companies as needed
        ];

        // Insert companies into database
        foreach ($companies as $companyData) {
            Company::create($companyData);
        }
    }
}