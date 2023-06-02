<?php

namespace App\Http\Livewire\Admin;

use Modules\Marketiers\Entities\Marketier as Market;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Commission\Entities\Commission;

class Marketiers extends Component
{
    use WithPagination, WithSorting;
    
    public $connission;

    protected $listeners = ['Marketiers' => '$refresh'];

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.marketiers',[
            'marketiers'=>Market::getMarketier($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
    /**
     * This function sums the marketier commission
     */
    private static function calculateCommission(){
        $commission = Commission::join('marketiers','marketiers.id','commissions.marketier_id')
        ->where('marketiers.id','commissions.marketier_id')->sum('commission');
    }
}
