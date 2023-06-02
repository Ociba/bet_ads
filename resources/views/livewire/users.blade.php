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
                        <th scope="col" wire:click="sortBy('users.id')" style="cursor: pointer;">#
                            @include('partials._sort-icon',['field'=>'users.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('name')" style="cursor: pointer;"> Clients Name
                            @include('partials._sort-icon',['field'=>'name'])
                        </th>
                        <th scope="col" wire:click="sortBy('email')" style="cursor: pointer;"> Email
                            @include('partials._sort-icon',['field'=>'email'])
                        </th>
                        <th scope="col" wire:click="sortBy('types')" style="cursor: pointer;"> Name
                            @include('partials._sort-icon',['field'=>'types'])
                        </th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $i=>$user)
                    <tr>
                        <th scope="row">{{$users->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td style="text-transform: capitalize">{{$user->types}}</td>
                        <td class="text-wrap">
                            <a href=""  class="btn-sm btn-primary mb-2">Edit</a>
                            <!-- text-->
                            <a href="" wire:click="deleteThisCategory({{ $user->id}})" class="btn-sm btn-success mb-2">Delete</a>
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
            Showing {{$users->firstItem()}} to {{$users->lastItem()}} out of {{$users->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$users->links()}}
        </div>
    </div>
</div>