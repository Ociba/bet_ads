<div wire:poll.5s>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="leaderboard-table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Ads Name</th>
                <th scope="col">Odds</th>
                <th scope="col">Price Per Tips</th>
            </tr>
            </thead>
            <tbody>
            @foreach($odds as $odd)
            <tr>
                <td>
                    <span class="profit">
                        {{$odd->ads_name}}
                    </span>
                </td>
                <td>
                    <span class="single-data"> 
                        {{$odd->odd}}
                    </span>
                </td>
                <td>
                    <a href="/odds/add-odds-to-session/{{$odd->odd}}/{{$odd->id}}/{{$odd->ads_name}}"><button @if(Session::has('advertOdd1')) class="primary-btn" @else class="btn btn-sm btn-secondary"@endif>Watch</button></a> 
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
</div>
