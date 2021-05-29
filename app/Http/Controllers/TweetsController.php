<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()
                ->user()
                ->timeline(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
        ]);
        $file = request()->file('file');
        $name = $file->getClientOriginalName();
        $file->move(public_path().'/tweet/', $name);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'file' => $name,
            // $path = $attributes['file']->store('public/files'),
        ]);

        return redirect()->route('home');
    }
}
