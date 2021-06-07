<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $listUser = User::with('role')->paginate(10);
        $listRole = Role::get();
        return view('user.index')->with(['listUser' => $listUser, 'listRole' => $listRole]);
    }

    public function show(Request $request)
    {
        # code...
    }

    public function store(Request $request)
    {
        $inputUser = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
            'role' => $request->input('role'),
        ];

        $saveData = User::create($inputUser);
        if ($saveData) {
            return redirect('cms/user');
        }
    }

    public function update($user, Request $request)
    {
        # code...
    }

    public function destroy(Request $request)
    {
        # code...
    }
}
