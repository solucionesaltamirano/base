<?php

namespace App\Http\Livewire;

use App\Events\NotiEvent;
use App\Models\Categoryfaicon;
use Livewire\Component;
use App\Models\Faicon;




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

        $faicons = Faicon::paginate(10); 

        $categories = Categoryfaicon::all();

        $icons = $categories->faicons->find();

        return view('livewire.prueba', compact('faicons', 'icons'));
    }
}
