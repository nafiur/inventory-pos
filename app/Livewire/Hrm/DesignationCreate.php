<?php

namespace App\Livewire\Hrm;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HrmDesignation;
use Illuminate\Support\Facades\Auth;

class DesignationCreate extends Component
{
    public $name;


    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function createDesignation()
    {
        $this->validate();

        HrmDesignation::create([
            'name' => $this->name,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        flash()->success('Designation created successfully!');

        // Optionally reset the form
        $this->reset(['name']);

        // Redirect to the unit index page
        return redirect()->route('designation.index');
    }

    public function render()
    {
        return view('livewire.hrm.designation-create')->extends('backend.admin_master')->section('content');
    }



}