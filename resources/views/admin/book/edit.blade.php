@extends('admin.layout.layout')
@section('title', 'Cập nhật sách')
@section('route', 'Cập nhật sách')
@section('product-menu', 'actives')
@section('main-content')
<br>
<div class="row">
    <div class="col-lg-3 col-3 layout-spacing">
        <h5>Ảnh chi tiết</h5>
        @if(count($books->images)>0)
        @foreach($books->images as $item)
        <form action="/admin/books/deleteImage/{{$item->id}}">
            <button class="btn text-danger">X</button>
            <br>
            @csrf
            @method('delete')
        </form>
        <br>
        <img src="{{asset('images/' . $item->image)}}" width="150px" height="150px" alt="">
        @endforeach
        @endif
    </div>
    <div class="col-lg-9 col-9 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <form action="{{route('admin.books.update',['id'=>$books->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Tên sách</label>
                            <input autocomplete="off" id="name" type="text" name="name" value="{{$books->name}}" class="form-control" id="" placeholder="">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Chọn danh mục</label>
                            <select name="cate_id" class="form-control">
                                <option value=""></option>
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}" {{$cate->id == $books->cate_id ? 'selected' : ''}}>{{$cate->name}}</option>
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
                            <input autocomplete="off" id="" type="text" name="price" value="{{$books->price}}" class="form-control" id="" placeholder="">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Giá khuyến mãi</label>
                            <input autocomplete="off" type="text" name="sale_price" value="{{$books->sale_price}}" class="form-control" id="" placeholder="">
                            @error('sale_price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Tác giả</label>
                            <input autocomplete="off" id="" type="text" name="author" value="{{$books->author}}" class="form-control" id="" placeholder="">
                            @error('author')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Đường dẫn</label>
                            <input autocomplete="off" id="slug" type="text" name="slug" value="{{$books->slug}}" class="form-control" id="" placeholder="">
                            @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Kích thước</label>
                            <input autocomplete="off" type="text" name="dimension" value="{{$books->dimension}}" class="form-control" id="" placeholder="">
                            @error('dimension')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Nhà xuất bản</label>
                            <input autocomplete="off" type="text" name="publisher" value="{{$books->publisher}}" class="form-control" id="" placeholder="">
                            @error('publisher')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Số trang</label>
                            <input autocomplete="off" id="" type="text" name="page" value="{{$books->page}}" class="form-control" id="" placeholder="">
                            @error('page')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput2">Bìa sách</label>
                            <input autocomplete="off" type="text" name="book_cover" value="{{$books->book_cover}}" class="form-control" id="" placeholder="">
                            @error('book_cover')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleFormControlFile1">Hình ảnh</label>
                            <input autocomplete="off" type="file" class="form-control-file" name="cover" id="exampleFormControlFile1">
                            <br>
                            <div class="div">
                                @if($books->cover)
                                <img src="{{asset('cover/' . $books->cover)}}" width="150px" height="150px" alt="">
                                @endif
                            </div>
                            @error('cover')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Hình ảnh liên quan</label>
                                <input autocomplete="off" type="file" class="form-control-file" name="images[]" multiple id="exampleFormControlFile1">
                                <br>
                                <div>
                                    @if(count($books->images)>0)
                                    @foreach($books->images as $item)
                                    <img src="{{asset('images/' . $item->image)}}" width="150px" height="150px" alt="">
                                    @endforeach
                                    @endif
                                </div>
                                @error('images')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Mô tả chi tiết</label>
                            <textarea class="form-control" name="detail" id="" rows="5">{{$books->detail}}</textarea>
                        </div>
                    </div><br>
                    <button type="submit" name="txt" class="mt-4 btn btn-primary">Cập nhật</button>
                    <a class="mt-4 btn btn-danger" href="{{route('admin.books.index')}}">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection