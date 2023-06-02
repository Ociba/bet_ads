<?php

namespace App\Http\Livewire\Clients;

use Modules\Clients\Entities\Deposit;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Transactions extends Component
{
    
    use WithPagination, WithSorting;

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.clients.transactions',[
            'withdrawn' =>Deposit::clientsWithdraws($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
