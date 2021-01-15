<div class="col-3">
    <div class="border border-dark rounded">

        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Followings
            </a>
            @foreach( auth()->user()->follows as $user)

            <a href="{{route('profile', $user->name)}}" class="list-group-item list-group-item-action"><img class=" mw-1 " style="width: 30px;" src="{{$user->avatar}}"> {{$user->name}}

            </a>
                @endforeach

        </div>

    </div>


</div>