<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Company;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        // Only admin users can view companies
        return $user->hasRole('admin');
    }

    public function create(User $user)
    {
        // Only admin users can create companies
        return $user->hasRole('admin');
    }

    public function update(User $user, Company $company)
    {
        // Only admin users can update companies
        return $user->hasRole('admin');
    }

    public function delete(User $user, Company $company)
    {
        // Only admin users can delete companies
        return $user->hasRole('admin');
    }
}