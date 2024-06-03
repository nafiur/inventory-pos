<?php

namespace App\Livewire\Hrm;

use Livewire\Component;

class DepartmentCreate extends Component
{
    public function render()
    {
        return view('livewire.hrm.department-create')->extends('backend.admin_master')->section('content');
    }
}