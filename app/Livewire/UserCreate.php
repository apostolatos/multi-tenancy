<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class UserCreate extends Component
{
    public function render()
    {
        // Check if user is authorized to create users
        if (Gate::denies('create-users')) {
            abort(403, 'Unauthorized action.');
        }

        return view('livewire.user-create')->layout('layouts.app');
    }
}
