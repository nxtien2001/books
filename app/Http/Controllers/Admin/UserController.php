<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::Orderby('id', 'DESC')->paginate(1000);
        return view('admin.user.index', compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(CreateUserRequest $request)
    {
        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('admin.users.index')->with('alert', 'Thêm dữ liệu thành công!');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('admin.users.index')->with('mesage', 'Cập nhật dữ liệu thành công!');
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'Đã xóa dữ liệu thành công!');
    }
}
