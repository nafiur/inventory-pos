<?php

namespace App\Livewire\Hrm;

use Livewire\Component;

class DesignationIndex extends Component
{
    public function render()
    {
        return view('livewire.hrm.designation-index')->extends('backend.admin_master')->section('content');
    }
}