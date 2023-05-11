<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function new_user()
    {
        return view("user.add");
    }

    function add_user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('list-user');
    }

    function list_user()
    {
        $users = User::all();
        return view('user.list', compact('users'));
    }

    function delete_user($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->back();
        } else {
            "User not found";
        }
    }
}
