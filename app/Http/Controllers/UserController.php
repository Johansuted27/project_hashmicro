<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::createUser($request->username, $request->password);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::updateUser($id, $request->username, $request->password);
        return response()->json($user);
    }

    public function delete($id)
    {
        $deleted = User::deleteUser($id);
        return response()->json(['deleted' => $deleted]);
    }
}
