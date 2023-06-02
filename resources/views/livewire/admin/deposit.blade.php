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
                        <th scope="col" wire:click="sortBy('total_odds')" style="cursor: pointer;"> Odds
                            @include('partials._sort-icon',['field'=>'total_odds'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;"> Amount
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('amount')" style="cursor: pointer;"> Amount Made
                            @include('partials._sort-icon',['field'=>'amount'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;"> Date
                            @include('partials._sort-icon',['field'=>'created_at'])
                        </th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deposits as $i=>$deposit)
                    <tr>
                        <th scope="row">{{$deposits->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{$deposit->name}}</td>
                        <td style="text-transform: capitalize">{{$deposit->total_odds}}</td>
                        <td style="text-transform: capitalize">{{$deposit->amount}}</td>
                        <td style="text-transform: capitalize">{{ number_format($deposit->total_odds * $deposit->amount)}}</td>
                        <td style="text-transform: capitalize">{{$deposit->created_at}}</td>
                        <td>
                            @if($deposit->status== "active")
                            <button wire:click="stopWithdraw({{ $deposit->id }})" class="btn btn-sm btn-success">Stop Withdraw</button>
                            @elseif($deposit->status== "limited")
                                <button wire:click="activateWithdraw({{ $deposit->id }})" class="btn btn-sm btn-primary">Allow Widthdraw</button>
                            @else
                                <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-placement="top" title="Amount Withdrawn: Sh.{{ number_format($deposit->amount_withdrawn)}} | Balance :Sh. {{ number_format(($deposit->total_odds * $deposit->amount)-$deposit->amount_withdrawn)}}">Widthdrew </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-2">
            Showing {{$deposits->firstItem()}} to {{$deposits->lastItem()}} out of {{$deposits->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$deposits->links()}}
        </div>
    </div>
</div>