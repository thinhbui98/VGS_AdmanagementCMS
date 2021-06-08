<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\File;
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
            'image' => $request->file('image'),
        ];

        $saveData = User::create($inputUser);
        if ($saveData) {
            dd($saveData);
            if ($request->hasFile('image')) {
                $imgUploadExt = strtolower($inputUser['image']->extension());
                $validExt = ['jpg', 'jpeg', 'png', 'gif'];
                if (in_array($imgUploadExt, $validExt)) {
                    $imgPath = 'images/user/' . $inputUser['name'];
                    mkdir(public_path($imgPath), 0777, true);
                    $imgFilename = date('Ymd') . '_' . time() . '_user_' . $inputUser['name'] . '.jpg';
                    $uploadImg = $inputUser['image']->move($imgPath, $imgFilename);
                    if ($uploadImg) {
                        $inputImg = [
                            'path' => $uploadImg->getPathName(),
                            'title' => 'avatar_user',
                            'type' => 0,
                        ];
                        $saveImg = File::create($inputImg);
                        if ($saveImg) {
                            return redirect('cms/user');
                        }
                    }
                } else {
                    $message = "Vui lòng chọn ảnh đúng định dạng!";
                }
            }
            return redirect('cms/user');
        }
    }

    public function update($user, Request $request)
    {
        # code...
    }

    public function destroy($user, Request $request)
    {
        dd($request);
    }

    public function delete($user, Request $request)
    {
        $findUser = User::find($user);
        if ($findUser) {
            $deleteUser = User::destroy($user);
            
        }
    }
}
