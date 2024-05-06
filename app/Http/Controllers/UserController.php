<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        //return $users;
        return view('users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if ($request->has('image')) {
            $file = $request->image->store('image', 'public');
        }
        // return $file;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->has('image') ? $file : null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('user.index')->with('message', 'User Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = User::findOrFail($user->id);
        // return $user;
        return view('showuser', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        //return $user;
        return view('updateuser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if ($request->has('image')) {
            $file = $request->image->store('image', 'public');
        }

        User::where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->has('image') ? $file : null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('user.index')->with('message', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user = User::find($user->id);
        $user->delete();
        return redirect()->route('user.index')->with('message', 'User Deleted Successfully!');
    }
}
