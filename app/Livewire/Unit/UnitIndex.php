<?php

namespace App\Livewire\Unit;

use App\Models\Unit;
use Livewire\Component;

class UnitIndex extends Component
{
    public $units;

    public function mount()
    {
        $this->units = Unit::orderBy('id', 'desc')->get();
    }

    public function confirmDelete($unitId)
    {
        $this->emit('confirmDelete', $unitId);
    }

    public function deleteUnit($unitId)
    {
        $unit = Unit::findOrFail($unitId);
        $unit->delete();

        session()->flash('message', 'Unit deleted successfully!');

        // Reload the units list after deletion
        $this->units = Unit::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.unit.unit-index')
            ->extends('backend.admin_master')
            ->section('content');
    }
}