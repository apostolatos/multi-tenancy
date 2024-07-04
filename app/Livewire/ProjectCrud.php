<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectCrud extends Component
{
    public function render()
    {
        return view('livewire.project-crud')->layout('layouts.app');
    }
}
