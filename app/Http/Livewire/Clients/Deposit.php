<?php

namespace App\Http\Livewire\Clients;
use Modules\Clients\Entities\Deposit as Deposits;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Deposit extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Deposit' => '$refresh'];

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.clients.deposit',[
            'my_deposits' =>Deposits::getDeposit($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
