<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBrand extends Component
{
    use WithFileUploads;

    public $brand;
    public $name;
    public $logo;
    public $status;

    protected $listeners = ['editBrand'];

    protected $rules = [
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|max:1024', // 1MB Max
        'status' => 'boolean',
    ];

    public function mount(Brand $brand)
    {
        $this->brand = $brand;
        $this->name = $brand->name;
        $this->status = $brand->status;
    }

    public function editBrand(Brand $brand)
    {
        $this->brand = $brand;
        $this->name = $brand->name;
        $this->status = $brand->status;
        $this->resetValidation();
        $this->dispatchBrowserEvent('show-edit-brand-modal');
    }

    public function saveChanges()
    {
        $this->validate();

        if ($this->logo) {
            $path = $this->logo->store('logos', 'public');
            $this->brand->logo = $path;
        }

        $this->brand->name = $this->name;
        $this->brand->status = $this->status;
        $this->brand->save();

        session()->flash('message', 'Brand updated successfully.');
        $this->dispatchBrowserEvent('hide-edit-brand-modal');
    }


    public function render()
    {
        return view('livewire.brand.edit-brand');
    }
}