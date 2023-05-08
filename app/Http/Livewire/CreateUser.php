<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CreateUser extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $users = User::where('name', 'LIKE' , '%' . $this->search . '%')
                ->orWhere('email', 'LIKE' , '%' . $this->search . '%')->paginate(17);
        return view('livewire.create-user', compact('users'));
    }
    
}
