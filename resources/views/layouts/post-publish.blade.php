<form style="border-radius: 300px;" method="Post" action="{{route('tweets')}}">
    @csrf
    <div class="card">
        <div class="card-header">
            <img class=" mw-1 " style="width: 30px;" src="{{auth()->user()->avatar}}">
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3">

                    </textarea>
            <div>

            </div>
            <div class="pt-3">
                <input  class="btn btn-primary btn-sm float-right " type="submit"> </input>
            </div>
        </div>
    </div>
</form>
@error('body')
<div class="alert alert-danger" role="alert">
    {{$message}}
</div>

@enderror