<div>
    <div class="row text-right">
        <div class="col-sm-1 mb-2">
            <select class="form-control" id="sel1" wire:model='perPage'>
                <option>10</option>
                <option>50</option>
                <option>100</option>
                <option>200</option>
            </select>
        </div>
        <div class="col-sm-7">
            
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div><br>
    <div class="row card">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" wire:click="sortBy('deposits.id')" style="cursor: pointer;">#
                            @include('partials._sort-icon',['field'=>'deposits.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;"> Amount Deposited
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount_withdrawn')" style="cursor: pointer;"> Amount Withdrawn
                            @include('partials._sort-icon',['field'=>'amount_withdrawn'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount_withdrawn')" style="cursor: pointer;"> Balance
                            @include('partials._sort-icon',['field'=>'amount_withdrawn'])
                        </th>
                        <th scope="col" wire:click="sortBy('date_of_withdraw')" style="cursor: pointer;"> Withdraw Date
                            @include('partials._sort-icon',['field'=>'date_of_withdraw'])
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($withdrawn as $i=>$deposit)
                    <tr>
                        <th scope="row">{{$withdrawn->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{ number_format($deposit->total_odds * $deposit->amount)}}</td>
                        <td style="text-transform: capitalize">{{ number_format($deposit->amount_withdrawn)}}</td>
                        <td style="text-transform: capitalize">{{ number_format(($deposit->total_odds * $deposit->amount)-$deposit->amount_withdrawn)}}</td>
                        <td style="text-transform: capitalize">{{$deposit->date_of_withdraw}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-2">
            Showing {{$withdrawn->firstItem()}} to {{$withdrawn->lastItem()}} out of {{$withdrawn->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$withdrawn->links()}}
        </div>
    </div>
</div>