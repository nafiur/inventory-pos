<?php

namespace App\Livewire\Hrm;

use Livewire\Component;

class DesignationCreate extends Component
{
    public function render()
    {
        return view('livewire.hrm.designation-create')->extends('backend.admin_master')->section('content');
    }
}