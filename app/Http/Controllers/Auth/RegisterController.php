<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function post(Request $request)
    {
        $user = new User();
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 0,
            'password' => bcrypt($request->password),
        ]);
        $user->save();
        if ($user->id) {
            return redirect()->back()->with('success', 'Đăng kí tài khoản thành công! Vui lòng đăng nhập');
        }
        return redirect()->back();
    }
}
