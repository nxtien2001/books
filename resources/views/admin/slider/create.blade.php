@extends('admin.layout.layout')
@section('title', 'Quản lý slider')
@section('route', 'Thêm mới slider')
@section('slider-menu', 'actives')
@section('main-content')

<br>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <form action="{{route('admin.sliders.store')}}" method="post" id="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlFile1">Hình ảnh</label>
                        <input autocomplete="off" type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                        <span class="text-danger error-text image_error"></span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <br>
                            <label for="">
                                <input type="radio" name="status" value="1" checked id="">
                                Hiển thị
                            </label>
                            <label for="">
                                <input type="radio" name="status" value="0" id="">
                                Ẩn
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="mt-4 mb-4 btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

@endsection