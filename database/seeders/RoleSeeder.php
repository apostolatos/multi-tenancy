<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Moderator']);

        $user = User::where('email', 'john.doe@example.com')->first();

        if ($user) {
            $user->assignRole('Admin');
        } else {
            $this->command->info('User not found.');
        }
    }
}
