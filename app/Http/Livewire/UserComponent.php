<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    // protected $queryString = ['search'];
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'LIKE', "%{$this->search}%")
            ->orWhere('email', 'LIKE', "%{$this->search}%")
            ->paginate(10);
        return view('livewire.user-component', compact('users'));
    }

    public function getQueryString()
    {   //con este metodo evitaremos que la cadena de paginacion aparesca en la url
        return [];
    }
}
