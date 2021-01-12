<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;


class TweetController extends Controller
{
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
