@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8">
                <div class="col-2">
                    <div class="col">
                    <img class="img-thumbnail mw-10" src="{{asset('images/download.png')}}">
                    </div>
                    <div class="col">
                        <h4>Tweety</h4>
                    </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @include('layouts.left-bar')

        <div class="col-6 float-right">
            @include('layouts.post-publish')
            @foreach($tweets as $tweet)
           @include('layouts.tweets')
                @endforeach

        </div>
        @include('layouts.right-bar')
    </div>
</div>

@endsection
