<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
    public $isOpen = 0;
    public $user_id;
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user')->extends('backend.admin_master')->section('content');
    }


    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->user_id = '';
    }

}
