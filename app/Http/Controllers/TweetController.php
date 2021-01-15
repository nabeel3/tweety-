<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\models\User;
use Illuminate\Http\Request;


class TweetController extends Controller
{

    public function index()
    {

//        $user = auth()->user();
//        $user =$user->tweets;
//        dd($user);
//        $tweets = Tweet::latest()->get();
        return view('tweets.index',[
            'tweets' => auth()->user()->timeline()
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([

            'body' => 'required',
        ]);
        Tweet::create([
            'user_id' => $request->user_id,
            'body' => $validated['body'],

        ]);
        return redirect('/home');
    }
}
