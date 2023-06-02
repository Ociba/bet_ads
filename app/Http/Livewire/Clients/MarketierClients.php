<?php

namespace App\Http\Livewire\Clients;
use Modules\Clients\Entities\Client;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class MarketierClients extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['MarketierClients' => '$refresh'];

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.clients.marketier-clients',[
            'clients' =>Client::getClient($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
