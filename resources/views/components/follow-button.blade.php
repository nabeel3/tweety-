<form method="Post" action="{{url("/follow/$user->name")}}">
    @csrf
    <button  type="submit" class="btn-primary btn btn-sm rounded-pill">{{auth()->user()->following($user) ? 'Unfollow Me' : 'follow Me'}}</button>
    <a class="btn-secondary btn btn-sm rounded-pill">Edit Profile</a>
</form>