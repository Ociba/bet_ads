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
                        <th scope="col" wire:click="sortBy('marketiers.id')" style="cursor: pointer;">#
                            @include('partials._sort-icon',['field'=>'marketiers.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('marketier_name')" style="cursor: pointer;"> Name
                            @include('partials._sort-icon',['field'=>'marketier_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('contact')" style="cursor: pointer;"> Contact
                            @include('partials._sort-icon',['field'=>'contatct'])
                        </th>
                        <th scope="col" wire:click="sortBy('contact')" style="cursor: pointer;"> Total Commission
                            @include('partials._sort-icon',['field'=>'contatct'])
                        </th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marketiers as $i=>$marketier)
                    <tr>
                        <th scope="row">{{$marketiers->firstitem() + $i}}</th> 
                        <td style="text-transform: capitalize">{{$marketier->marketier_name}}</td>
                        <td style="text-transform: capitalize">{{$marketier->contact}}</td>
                        @php
                            $commission = \Modules\Commission\Entities\Commission::join('marketiers','marketiers.id','commissions.marketier_id')
                            ->where('commissions.marketier_id',$marketier->id)->sum('commission');
                        @endphp
                        <td style="text-transform: capitalize">{{ number_format($commission)}}</td>
                        <td class="text-wrap">
                            <a href=""  class="btn-sm btn-primary mb-2">Edit</a>
                            <!-- text-->
                            <a href="" wire:click="deleteThisCategory({{ $marketier->id}})" class="btn-sm btn-success mb-2">Delete</a>
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
            Showing {{$marketiers->firstItem()}} to {{$marketiers->lastItem()}} out of {{$marketiers->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$marketiers->links()}}
        </div>
    </div>
    <div class="row">
        <div class="text-right col-sm-12 mb-2">
            <button class="btn btn-sm btn-info mb-2" onclick="Livewire.emit('openModal', 'admin.add-marketier')">Add Marketier (s)</button>
                
        </div>
    </div>
</div>