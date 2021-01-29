<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserDataTable extends Component
{

    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '5']
    ];

    public $search = '' ;
    public $perPage = '5' ;

    public function clear(){
        $this->search = '';
        $this->perPage = '5';
        $this->page = 1;

    }


    public function render()
    {
        $users = User::where('name', 'LIKE', "%{$this->search}%")
            ->orWhere('email', 'LIKE', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.user-data-table', compact('users'));
    }
}
