<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBrand extends Component
{
    use WithFileUploads;

    public $name;
    public $logo;
    public $status = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|max:1024', // 1MB Max
        'status' => 'boolean',
    ];

    public function createBrand()
    {
        $this->validate();

        $path = $this->logo ? $this->logo->store('logos', 'public') : null;

        Brand::create([
            'name' => $this->name,
            'logo' => $path,
            'status' => $this->status,
        ]);

        // session()->flash('message', 'Brand created successfully.');
        // flash()->success('Brand created successfully!');

        flash()->success('Brand created successfully!', ['display' => ['marginTop' => '100px']]);

        // Optionally reset the form
        $this->reset(['name', 'logo', 'status']);

        $this->dispatch('create-brand');
    }



    public function render()
    {
        return view('livewire.brand.create-brand');
    }
}