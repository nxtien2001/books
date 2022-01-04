@extends('admin.layout.layout')
@section('title', 'Thêm sách')
@section('route', 'Thêm sách mới')
@section('product-menu', 'actives')
@section('main-content')

<br>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <form action="{{route('admin.books.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Tên sách</label>
                        <input autocomplete="off" id="name" type="text" name="name" value="{{old('name')}}" class="form-control" id="" placeholder="">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Chọn danh mục</label>
                        <select name="cate_id" class="form-control">
                            <option value=""></option>
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                        @error('cate_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Giá bán</label>
                        <input autocomplete="off" id="" type="text" name="price" value="{{old('price')}}" class="form-control" id="" placeholder="">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Giá khuyến mãi</label>
                        <input autocomplete="off" type="text" name="sale_price" value="{{old('sale_price')}}" class="form-control" id="" placeholder="">
                        @error('sale_price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Tác giả</label>
                        <input autocomplete="off" id="" type="text" name="author" value="{{old('author')}}" class="form-control" id="" placeholder="">
                        @error('author')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Đường dẫn</label>
                        <input autocomplete="off" id="slug" type="text" name="slug" value="{{old('slug')}}" class="form-control" id="" placeholder="">
                        @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Kích thước</label>
                        <input autocomplete="off" type="text" name="dimension" value="{{old('dimension')}}" class="form-control" id="" placeholder="">
                        @error('dimension')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Nhà xuất bản</label>
                        <input autocomplete="off" type="text" name="publisher" value="{{old('publisher')}}" class="form-control" id="" placeholder="">
                        @error('publisher')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Số trang</label>
                        <input autocomplete="off" id="" type="text" name="page" value="{{old('page')}}" class="form-control" id="" placeholder="">
                        @error('page')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Bìa sách</label>
                        <input autocomplete="off" type="text" name="book_cover" value="{{old('book_cover')}}" class="form-control" id="" placeholder="">
                        @error('book_cover')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlFile1">Hình ảnh</label>
                        <input autocomplete="off" type="file" class="form-control-file" name="cover" id="exampleFormControlFile1">
                        @error('cover')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="">Hình ảnh liên quan</label>
                        <input autocomplete="off" type="file" class="form-control-file" name="images[]" multiple id="exampleFormControlFile1">
                        @error('images')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Mô tả chi tiết</label>
                        <textarea class="form-control" name="detail" id="" rows="5"></textarea>
                    </div>
                </div>
                <input type="submit" name="txt" value="Thêm mới" class="mt-4 btn btn-primary">
                <a class="mt-4 btn btn-danger" href="{{route('admin.books.index')}}">Quay lại</a>
            </form>
        </div>
    </div>
</div>

@endsection