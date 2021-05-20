<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{

    public $titulo; 


    public function mount($titulo)
    {
        $this->titulo = $titulo;
        $this->fill(['titulo' => 'Hello World!']);
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
