<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Company;
use Illuminate\Support\Facades\Gate;

class CompanyIndex extends Component
{
    public function render()
    {
        // Fetch the current user
        $user = auth()->user();

        // Check if user is authorized to view companies
        if (Gate::denies('view-companies', Company::class)) {
            abort(403, 'Unauthorized action.');
        }

        // Fetch companies based on user's role
        if ($user->hasRole('admin')) {
            $companies = Company::all();
        } elseif ($user->hasRole('moderator')) {
             $companies = $user->companies()->get();
        } else {
            abort(403, 'Unauthorized action.');
        }

        return view('livewire.company-index', ['companies' => $companies])
            ->layout('layouts.app');
    }
}
