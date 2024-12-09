<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('master.user.index', compact('user'));
    }

    public function create()
    {
        return view('master.user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::createUser($request->name, $request->email, $request->password);
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('master.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,' . $id,
        ]);

        $user = User::updateUser($id, $request->name,$request->email);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $deleted = User::deleteUser($id);
        return redirect()->route('user.index');
    }
}
