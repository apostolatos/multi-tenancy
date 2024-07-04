<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        // Allow all authenticated users to create projects
        return true;
    }

    public function update(User $user, Project $project)
    {
        // Only admin users or project creators can update projects
        return $user->hasRole('admin') || $user->id === $project->creator_id;
    }

    public function delete(User $user, Project $project)
    {
        // Only admin users or project creators can delete projects
        return $user->hasRole('admin') || $user->id === $project->creator_id;
    }
}