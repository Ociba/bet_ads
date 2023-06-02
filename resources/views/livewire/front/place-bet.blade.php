<div>
    <?php
        {{-- dd(-3 + count(Session::all()));--}}	
        {{--Session::flush(); --}}
    ?>
        <div class="leaderboard-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Odd</th>
                    </tr>
                </thead>
                <tbody>
                
                @foreach($odd_selected as $od)
                <tr>
                    <td>
                        <span class="type-name">

                        </span>
                    </td>
                    <td>
                        <span class="single-data-odds"> 
                        </span>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td>
                    <span class="type-name">
                        Total Odds
                    </span>
                    </td> 
                    <td>
                    <span class="single-data-odds"> 
                        @php
                            $total = 0;
                            for($i=1; $i<(-3 + count(Session::all())); $i++){
                                $total += Session::get('advertOdd');
                            }
                        @endphp
                        {{$total}}
                    </span>
                    </td>
                </tr>
                
                <form wire:submit.prevent="submit" class="m-2">
                <tr class="mt-1">
                    <td colspan="2">
                        <input type="hidden" class="form-control" wire:model="marketier_id" id="MarketierId">
                        <input type="hidden" wire:model="total_odds" class="form-control mb-2"  value="{{$total}}">
                        <input type="number" wire:model="amount" class="form-control" placeholder="Your Stake">
                    </td>
                    </tr>
                    <tr class="text-center">
                        <td style="background-color:#ebf2f9; text-align:center;">
                        <button class="primary-btn btn-sm" type="submit" style="color:white; background-color:blue;">
                            Bet Now
                        </button>
                        </td>
                    </tr>
                    </form>
                </tbody>
            </table>
        
        </div>
</div>
