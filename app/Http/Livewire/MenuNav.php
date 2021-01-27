<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuNav extends Component
{

    public $notifications = 0;

   
    protected function getListeners()
    {
        return [
            // Special Syntax: ['echo:{channel},{event}' => '{method}', ...]
            "echo:chNotification,NotiEvent" => 'notify'
        ];
    }

    public function notify(){

        if($this->notifications < 9){        
            $this->notifications++;
        }
        else{
            $this->notifications = "9+";
        }
    }

    public function render()
    {
        return view('livewire.menu-nav');
    }
}
