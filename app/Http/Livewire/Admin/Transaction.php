<?php

namespace App\Http\Livewire\Admin;

use Modules\Clients\Entities\Deposit;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Transaction extends Component
{
    use WithPagination, WithSorting;

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.transaction',[
            'transactions' =>Deposit::allWithdraws($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
