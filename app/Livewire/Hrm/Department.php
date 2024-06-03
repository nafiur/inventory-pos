<?php

namespace App\Livewire\Hrm;

use Livewire\Component;
use App\Models\HrmDepartment;

class Department extends Component
{
    public $departments;

    public function mount()
    {

        $this->departments = HrmDepartment::all();
    }

    public function render()
    {
        return view('livewire.hrm.department')->extends('backend.admin_master')->section('content');
    }
}