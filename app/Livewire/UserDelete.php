<?php

namespace App\Livewire;

use Livewire\Component;

class UserDelete extends Component
{
    public function render()
    {
        return view('livewire.user-delete')->layout('layouts.app');
    }
}
