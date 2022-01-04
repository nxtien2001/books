@extends('admin.layout.layout')
@section('title', 'Admin')
@section('route', 'Cập nhật thành viên')
@section('user-menu', 'actives')
@section('main-content')

<br>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <form action="{{route('admin.users.update',['id'=>$users->id])}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Họ Tên</label>
                        <input autocomplete="off" id="" type="text" name="fullname" value="{{$users->fullname}}" class="form-control" id="" placeholder="">
                        @error('fullname')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Quyền</label>
                            <br>
                            <label for="">
                                <input type="radio" name="role" value="0" checked id="">
                                Khách hàng
                            </label>
                            <label for="">
                                <input type="radio" name="role" value="1" id="">
                                Admin
                            </label>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Email</label>
                        <input autocomplete="off" id="" type="email" name="email" value="{{$users->email}}" class="form-control" id="" placeholder="">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Số điện thoại</label>
                        <input autocomplete="off" id="slug" type="text" name="phone" value="{{$users->phone}}" class="form-control" id="" placeholder="">
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Mật khẩu</label>
                        <input autocomplete="off" type="password" name="password" value="" class="form-control" id="" placeholder="">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Nhập lại mật khẩu</label>
                        <input autocomplete="off" type="password" name="confirm" value="" class="form-control" id="" placeholder="">
                        @error('confirm')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <input type="submit" name="txt" value="Thêm mới" class="mt-4 btn btn-primary">
                <a class="mt-4 btn btn-danger" href="{{route('admin.users.index')}}">Quay lại</a>
            </form>
        </div>
    </div>
</div>
@endsection