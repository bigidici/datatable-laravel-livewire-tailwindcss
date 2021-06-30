<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public $search="";

    public function updatingSearch()
    {
       $this->resetPage();
    }
    public function render()
    {
        return view('livewire.table', ['users'=>User::where('name','like','%'.$this->search.'%')->get()]);
    }
}
