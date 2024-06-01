<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class BrandIndex extends Component
{
    public $brands;

    protected $listeners = ['brandUpdated' => '$refresh'];

    public function mount()
    {
        $this->brands = Brand::all();
    }

    public function refreshDatatable()
    {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.brand.brand-index');
    }
}