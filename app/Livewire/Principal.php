<?php

namespace App\Livewire;

use Livewire\Component;

class Principal extends Component
{
    public  $slides = [
        [
            'image' => '/images/joyeria1.png',
        ]
    ];
    public function render()
    {
        return view('livewire.principal')->layout('components.layouts.app');
    }
}
