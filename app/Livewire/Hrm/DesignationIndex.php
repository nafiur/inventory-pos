<?php

namespace App\Livewire\Hrm;

use Livewire\Component;
use App\Models\HrmDesignation;

class DesignationIndex extends Component
{
    public $designations;

    public function mount()
    {
        $this->designations = HrmDesignation::all();
    }

    public function render()
    {
        return view('livewire.hrm.designation-index')->extends('backend.admin_master')->section('content');
    }
}