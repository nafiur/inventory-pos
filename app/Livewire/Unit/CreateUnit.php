<?php

namespace App\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class CreateUnit extends Component
{
    public $name;
    public $short_name;
    public $status = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'short_name' => 'required|string|max:255',
        'status' => 'boolean',
    ];

    public function createUnit()
    {
        $this->validate();

        Unit::create([
            'name' => $this->name,
            'short_name' => $this->short_name,
            'status' => $this->status,
        ]);

        // Optionally reset the form
        $this->reset(['name', 'short_name', 'status']);

        // Redirect to the unit index page
        return redirect()->route('unit.index');
    }

    public function render()
    {
        return view('livewire.unit.create-unit')->extends('backend.admin_master')->section('content');

    }
}