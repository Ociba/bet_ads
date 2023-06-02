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
                    <tr class="text-center">
                        <td style="background-color:#ebf2f9; text-align:center;">
                        <a href="#0" class="buy-tips-btn1">
                            Place Your Bet Now
                        </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>
</div>
