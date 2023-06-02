<?php

namespace App\Http\Livewire\Admin;

use Modules\Commission\Entities\Commission;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class MarketierCommission extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['MarketierCommission' => '$refresh'];

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.marketier-commission',[
            'commissions' =>Commission::getCommission($this->search, $this->sortBy, $this->sortDirection, $this->perPage),
            'total_commission' =>Commission::getCommissionSum()
        ]);
    }
}
