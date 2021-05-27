<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user
                ->tweets()
                ->withLikes()
                ->paginate(50),
        ]);
    }

    public function edit(User $user )
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user ,Request $request)
    {
        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user),
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['image'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user),
            ],
            'date_of_birth' => [
                'string',
               
            ],
            'gender' => [
                'string',
                
            ],
            'password' => [
                'required', 
                'string',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
                'confirmed'
            ],
            ['password.regex' => 'Password must contain at least one number and both uppercase and lowercase letters and one special character.'],
        ]);

         if ($request->hasFile('avatar'))
    {
            $file = $request->file('avatar');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $attributes['avatar'] = $name;
                             
        } 
        $user->update($attributes);
        return redirect(route('profile', $user)); 
  
 return redirect($user->path());

    }



    public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $posts = User::query()
        ->where('username', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->get();
    // Return the search view with the resluts compacted
    return view('explore', compact('posts'));
}
}
