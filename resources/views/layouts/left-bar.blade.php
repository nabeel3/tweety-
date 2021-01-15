<div class="col-3">Dashboaard
    <div class="pt-2 pb-5 align-baseline side-bar-font">
        <ul class="list-unstyled p-3 display">
          <a href="{{route('tweets')}}">
          <li>Home</li></a>

            <a href="{{route('profile', auth()->user())}}"><li>Profile</li></a>


        </ul>

    </div>
    <button type="button" class="btn btn-primary">Tweet a roo</button>
</div>