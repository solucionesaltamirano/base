<?php

namespace App\Http\Livewire;

use App\Events\NotiEvent;
use Livewire\Component;

class Prueba extends Component
{
    public $texto = "Hola, soy un atributo del componente Prueba";

    public $notification = false;
    
    public function notificar() {
        broadcast(new NotiEvent);
    }

    protected function getListeners()
    {
        return [
// Special Syntax: ['echo:{channel},{event}' => '{method}', ...]
            "echo:chPrueba,PruebaEvent" => 'notify'
        ];
    }

    public function notify(){
        $this->notification = !$this->notification;
    }

    public function render()
    {
        return view('livewire.prueba');
    }
}
