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
                        <th scope="col" wire:click="sortBy('odds.id')" style="cursor: pointer;">#
                            @include('partials._sort-icon',['field'=>'odds.id'])
                        </th>
                        <th scope="col" wire:click="sortBy('odd')" style="cursor: pointer;"> Odds
                            @include('partials._sort-icon',['field'=>'ads_name'])
                        </th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($odds as $i=>$odd)
                    <tr>
                        <th scope="row">{{$odds->firstitem() + $i}}</th>
                        <td style="text-transform: capitalize">{{$odd->odd}}</td>
                        <td style="text-transform: capitalize">{{$odd->ads_name}}</td>
                        <td class="text-wrap">
                        <div class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic btn-md btn-info text-white" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-dow">Select &nbsp;</span> </a>
                            <div class="dropdown-menu dropdown-menu-left animated flipInY" style="border:none; min-width:6rem">
                                <!-- text-->
                                {{--<a href="{{URL::signedRoute('EditCategories', ['category_id' => 1])}}" class="dropdown-item">Edit</a>--}}
                                <button  class="dropdown-item mb-2">Edit</button>
                                <!-- text-->
                                <button wire:click="deleteThisCategory({{ $odd->id}})" class="dropdown-item mb-2">Delete</button>
                                <!-- text-->
                            </div>
                        </div>
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
            Showing {{$odds->firstItem()}} to {{$odds->lastItem()}} out of {{$odds->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$odds->links()}}
        </div>
    </div>
    <div class="row">
        <div class="text-right col-sm-12 mb-2">
            <button class="btn btn-sm btn-info mb-2" onclick="Livewire.emit('openModal', 'admin.add-ads-odds')">Add Odd (s)</button>
                
        </div>
    </div>
</div>