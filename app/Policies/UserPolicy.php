<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        // Only admin users can create other users
        return $user->hasRole('admin');
    }

    public function update(User $user, User $targetUser)
    {
        // Only admin users can update other users
        return $user->hasRole('admin');
    }

    public function delete(User $user, User $targetUser)
    {
        // Only admin users can delete other users
        return $user->hasRole('admin');
    }
}