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
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;"> Name
                            @include('partials._sort-icon',['field'=>'name'])
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
                        <th scope="col" wire:click="sortBy('status')" style="cursor: pointer;"> Status
                            @include('partials._sort-icon',['field'=>'status'])
                        </th>
                        <th scope="col" wire:click="sortBy('date_of_withdraw')" style="cursor: pointer;"> Withdraw Date
                            @include('partials._sort-icon',['field'=>'date_of_withdraw'])
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $i=>$withdraw)
                    <tr>
                        <th scope="row">{{$transactions->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{ $withdraw->name}}</td>
                        <td style="text-transform: capitalize">{{ number_format($withdraw->total_odds * $withdraw->amount)}}</td>
                        <td style="text-transform: capitalize">{{ number_format($withdraw->amount_withdrawn)}}</td>
                        <td style="text-transform: capitalize">{{ number_format(($withdraw->total_odds * $withdraw->amount)-$withdraw->amount_withdrawn)}}</td>
                        <td style="text-transform: capitalize"><span class="badge square-pill bg-primary text-white ms-auto">{{$withdraw->status}}</span></td>
                        <td style="text-transform: capitalize">{{$withdraw->date_of_withdraw}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-2">
            Showing {{$transactions->firstItem()}} to {{$transactions->lastItem()}} out of {{$transactions->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$transactions->links()}}
        </div>
    </div>
</div>