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
    <div class="row">
        <div class="col-sm-8 col-lg-8 col-md-8 mb-2">
            <span style="color:blue; font-weight:bold;">Total Commision Received from Clients =ugx {{  number_format($total_commission)}}</span>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
        </div>
    </div><br>
    <div class="row card">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" wire:click="sortBy('commissions.id')" style="cursor: pointer;">#
                            @include('partials._sort-icon',['field'=>'commissions.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;"> Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('commission')" style="cursor: pointer;"> Commision Amount
                            @include('partials._sort-icon',['field'=>'commission'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;"> Date
                            @include('partials._sort-icon',['field'=>'created_at'])
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commissions as $i=>$commission)
                    <tr>
                        <th scope="row">{{$commissions->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{$commission->name}}</td>
                        <td style="text-transform: capitalize">{{ number_format($commission->commission)}}</td>
                        <td style="text-transform: capitalize">{{$commission->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-2">
            Showing {{$commissions->firstItem()}} to {{$commissions->lastItem()}} out of {{$commissions->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$commissions->links()}}
        </div>
    </div>
</div>