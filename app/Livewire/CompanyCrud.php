<?php

namespace App\Livewire;

use Livewire\Component;

class CompanyCrud extends Component
{
    public function render()
    {
        return view('livewire.company-crud')->layout('layouts.app');
    }
}
