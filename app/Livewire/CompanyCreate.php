<?php

namespace App\Livewire;

use Livewire\Component;

class CompanyCreate extends Component
{
    public function render()
    {
        return view('livewire.company-create')->layout('layouts.app');
    }
}
