<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact as Contacto;

class Contact extends Component
{
    public $data, $nombre, $email, $selected_id;
    public $updateMode = false;

    // https://benborgers.com/livewire-validation-messages
    protected $messages = [
        'nombre.min' => 'El nombre es demasiado corto.',
        'email.required' => 'Debe ingresar su correo electronico.',
        'email.email' => 'El formato del correo ingresado no es valido.',
    ];

   public function render()
    {
        $this->data = Contacto::all();
        return view('livewire.contact');
    }
    private function resetInput()
    {
        $this->nombre = null;
        $this->email = null;
    }
    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        Contacto::create([
            'nombre' => $this->nombre,
            'email' => $this->email
        ]);
        $this->resetInput();
        session()->flash('message', 'Contacto agregado.');
    }
    public function edit($id)
    {
        $record = Contacto::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->email = $record->email;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'nombre' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        if ($this->selected_id) {
            $record = Contacto::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'email' => $this->email
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Contacto::where('id', $id);
            $record->delete();
        }
    }
}
