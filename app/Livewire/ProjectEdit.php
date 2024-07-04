<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectEdit extends Component
{
    public $project;

    public function mount($projectId)
    {
        $this->project = Project::findOrFail($projectId);

        // Check if current user is the creator of the project or admin
        if (!Auth::user()->hasRole('admin') && $this->project->creator_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }

    public function render()
    {
        return view('livewire.project-edit', ['project' => $this->project])->layout('layouts.app');
    }
}
