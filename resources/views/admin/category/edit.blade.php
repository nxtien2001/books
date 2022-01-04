@extends('admin.layout.layout')
@section('title', 'Dashboard')
@section('route', 'Cập nhật danh mục')
@section('category-menu', 'actives')
@section('main-content')

<br>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <form action="{{route('admin.categories.update',['id'=>$category->id])}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Tên danh mục</label>
                        <input autocomplete="off" type="text" id="name" name="name" value="{{$category->name}}" class="form-control" id="" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Chọn danh mục cha</label>
                        <select class="form-control" name="parent_id">
                            <option value="0">Chọn danh mục cha</option>
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @if($cate->childrent)
                            @foreach($cate->childrent as $c)
                            <option value="{{$c->id}}"> -- {{$c->name}}</option>
                            @endforeach
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Đường dẫn</label>
                        <input autocomplete="off" id="slug" type="text" name="slug" value="{{$category->slug}}" class="form-control" id="" placeholder="">
                    </div>
                </div>
                <button type="submit" name="time" class="mt-4 mb-4 btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

@endsection