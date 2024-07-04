<?php

namespace App\Livewire;

use Livewire\Component;

class CompanyDelete extends Component
{
    public function render()
    {
        return view('livewire.company-delete')->layout('layouts.app');
    }
}
