<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }

    public function getUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user', ['user' => $user]);
    }
    public function store(Request $request)
    {
       $request->validate([
            'id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:8', 'same:confirm_password'],
            'confirm_password' => ['required'],
       ]);

        $user_password = Hash::make($request->password);

        $user =new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $user_password;

        $user->save();

        return redirect('admin/users')->with('success', 'New User Successfully Added!');
    }

    public function update(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role' => ['required'],
            'isActive' => ['required'],
        ]);

        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->isActive = $request->isActive;

        $user->save();

        return redirect('admin/user/' . $user->id)->with('success', 'User Updated Successfully');

    }
}
