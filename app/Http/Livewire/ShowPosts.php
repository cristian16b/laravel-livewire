<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoPrestacion;


class ShowPosts extends Component
{

    public $titulo; 
    public $tp;


    public function mount($titulo)
    {
        $this->titulo = $titulo;
        $this->fill(['titulo' => 'Ingresa algo!']);
        $this->tp = TipoPrestacion::all();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }

    public function search() {
        // hacer algo
        // dd($this->titulo);
        // hacemos una consulta tonta buscando algo que coincida con lo ingresado
        $this->tp = TipoPrestacion::where('TPR_DES', 'like', '%'.$this->titulo.'%')->get();
        // dd($this->tp);
    }
}
