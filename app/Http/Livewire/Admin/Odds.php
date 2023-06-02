<?php

namespace App\Http\Livewire\Admin;

use Modules\Odds\Entities\Odd;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class Odds extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Odds' => '$refresh'];

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.odds',[
            'odds' => Odd::getOdds($this->search, $this->sortBy, $this->sortDirection, $this->perPage),
        ]);
    }
}
