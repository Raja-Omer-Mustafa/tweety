<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
class ExploreController extends Controller
{
    public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $posts = User::query()
        ->where('username', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->get();
        $posts=User::paginate(50);
    // Return the search view with the resluts compacted
    return view('explore', compact('posts'));
}
}
