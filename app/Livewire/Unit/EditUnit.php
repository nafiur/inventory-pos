<?php

namespace App\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class EditUnit extends Component
{
    public $unitId; // Assuming you'll pass the unit id to this component
    public $name;
    public $short_name;
    public $status = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'short_name' => 'required|string|max:255',
        'status' => 'boolean',
    ];

    public function mount($unitId)
    {
        $unit = Unit::findOrFail($unitId);
        $this->name = $unit->name;
        $this->short_name = $unit->short_name;
        $this->status = $unit->status;
    }

    public function editUnit()
    {
        $this->validate();

        Unit::findOrFail($this->unitId)->update([
            'name' => $this->name,
            'short_name' => $this->short_name,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Unit updated successfully!');

        return redirect()->route('unit.index');
    }
    public function render()
    {
        return view('livewire.unit.edit-unit')->extends('backend.admin_master')->section('content');
    }
}