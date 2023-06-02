<?php

namespace App\Http\Livewire\Admin;

use Modules\Clients\Entities\Deposit as Deposits;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Session;

class Deposit extends Component
{
    use WithPagination, WithSorting;

    //over ridding sortby from the trait
    public $sortBy = 'id';

    //using the bootstrap pagination theme
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.deposit',[
            'deposits' =>Deposits::deposits($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
    /**
     * This function stops client fromwithdrawing money
     */
    public static function stopWithdraw($deposit_id){
        Deposits::whereId($deposit_id)->update(['status'=>'limited']);
        Session::flash('msg', 'Operation Successful');
    }
    /**
     * This function stops client fromwithdrawing money
     */
    public static function activateWithdraw($deposit_id){
        Deposits::whereId($deposit_id)->update(['status'=>'active']);
        Session::flash('msg', 'Operation Successful');
    }
}
