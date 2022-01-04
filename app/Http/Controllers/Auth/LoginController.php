<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only([
            'email',
            'password',
        ]);
        $result = Auth::attempt($data);

        if ($result === false) {
            session()->flash('error', 'Sai email hoặc mật khẩu');
            return back();
        }
        // $user = Auth::user();
        return redirect()->route('admin.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
