<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $listUser = User::paginate(10);
        return view('user.index')->with('listUser', $listUser);
    }

    public function show(Request $request)
    {
        # code...
    }

    public function create(Request $request)
    {
        # code...
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function update(Request $request)
    {
        # code...
    }

    public function destroy(Request $request)
    {
        # code...
    }
}
