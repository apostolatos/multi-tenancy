<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserIndex extends Component
{
    public function render()
    {
        // Check if user is authorized to view companies
        if (Gate::denies('view-users', User::class)) {
            abort(403, 'Unauthorized action.');
        }

        return view('livewire.user-index')->layout('layouts.app');
    }
}
