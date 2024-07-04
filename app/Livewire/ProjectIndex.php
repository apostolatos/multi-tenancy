<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectIndex extends Component
{
    public function render()
    {
        return view('livewire.project-index')->layout('layouts.app');
    }
}
