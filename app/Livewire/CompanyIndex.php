<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Company;
use Illuminate\Support\Facades\Gate;

class CompanyIndex extends Component
{
    public function render()
    {
        // Check if user is authorized to view companies
        if (Gate::denies('view-companies')) {
            abort(403, 'Unauthorized action.');
        }

        $companies = Company::all();
        
        return view('livewire.company-index', ['companies' => $companies])
            ->layout('layouts.app');
    }
}
