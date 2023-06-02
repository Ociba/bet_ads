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
                    @foreach ($my_deposits as $i=>$deposit)
                    <tr>
                        <th scope="row">{{$my_deposits->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{$deposit->total_odds}}</td>
                        <td style="text-transform: capitalize">{{$deposit->amount}}</td>
                        <td style="text-transform: capitalize">{{ number_format($deposit->total_odds * $deposit->amount)}}</td>
                        <td style="text-transform: capitalize">{{$deposit->created_at}}</td>
                        <td>
                            @if($deposit->status =='active')
                            <a href="{{URL::signedRoute('Withdraws', ['withdraw_id' => $deposit->id])}}" class="btn btn-sm btn-success">Widthdraw</a>
                            @else
                                <button class="btn btn-sm btn-danger">Limited</button>
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
            Showing {{$my_deposits->firstItem()}} to {{$my_deposits->lastItem()}} out of {{$my_deposits->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$my_deposits->links()}}
        </div>
    </div>
    <div class="row">
        <div class="text-right col-sm-12 mb-2">
            <button class="btn btn-sm btn-info mb-2" onclick="Livewire.emit('openModal', 'clients.add-deposit')">Add Deposit (s)</button>
                
        </div>
    </div>
</div>