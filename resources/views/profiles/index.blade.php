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
            <img class="card-img-bottom" src="https://i.pinimg.com/originals/e4/02/59/e4025992f83181ef484b3244aaf21252.jpg" alt="Card image cap">
            <div class="position-absolute " style="top: 2%;left: 35%;">
            <img src="{{$user->avatar}}" class="rounded-circle" alt="Cinque Terre" width="170" height="170">
            </div>
            <div class="mt-4">
            <h5>{{$user->name}}</h5>
            </div>
            <div class="float-right pb-5 d-inline">





              <x-follow-button :user="$user">

              </x-follow-button>

            </div>
            <div class="card mt-5 pt-3 text-center" style="width: 35rem;">
                <div class="card-body">
                    <h5 class="card-title ">About</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text"><small>Some quick example text to build on the card title and make up the bulk of the card's content.</small> </p>

                </div>
            </div>
               <div class="mt-5 pt-3">
                   <?php $tweet = $user->tweets; ?>
                @include('layouts._tweets', [
                'tweet' => $tweet

                ])
               </div>






        </div>
        @include('layouts.right-bar')
    </div>
</div>

@endsection
