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
                        <th scope="col" wire:click="sortBy('clients.id')" style="cursor: pointer;">#
                            @include('partials._sort-icon',['field'=>'clients.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('client_name')" style="cursor: pointer;"> Name
                            @include('partials._sort-icon',['field'=>'client_name'])
                        </th>
                        <th scope="col" wire:click="sortBy('phone_number')" style="cursor: pointer;"> Phone Number
                            @include('partials._sort-icon',['field'=>'phone_number'])
                        </th>
                        <th scope="col" wire:click="sortBy('clients_email')" style="cursor: pointer;"> Email
                            @include('partials._sort-icon',['field'=>'clients_email'])
                        </th>
                        <th scope="col" wire:click="sortBy('created_at')" style="cursor: pointer;"> Date
                            @include('partials._sort-icon',['field'=>'created_at'])
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $i=>$client)
                    <tr>
                        <th scope="row">{{$clients->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{$client->client_name}}</td>
                        <td style="text-transform: capitalize">{{$client->phone_number}}</td>
                        <td style="text-transform: lowercase">{{$client->clients_email}}</td>
                        <td style="text-transform: capitalize">{{$client->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-2">
            Showing {{$clients->firstItem()}} to {{$clients->lastItem()}} out of {{$clients->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$clients->links()}}
        </div>
    </div>
    <div class="row">
        <div class="text-right col-sm-12 mb-2">
            <button class="btn btn-sm btn-info mb-2" onclick="Livewire.emit('openModal', 'clients.add-client')">Add Client (s)</button>
                
        </div>
    </div>
</div>