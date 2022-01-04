@extends('admin.layout.layout')
@section('title', 'Dashboard')
@section('route', 'Thêm mới danh mục')
@section('product-menu', 'actives')
@section('main-content')

<br>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <form action="{{route('admin.categories.store')}}" method="post" id="main_form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput2">Tên danh mục</label>
                        <input autocomplete="off" type="text" id="name" name="name" value="{{old('name')}}" class="form-control" id="" placeholder="">
                        <span class="text-danger error-text name_error"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="">Chọn danh mục cha</label>
                        <select class="form-control" name="parent_id">
                            <option value="0">Chọn danh mục cha</option>
                            @foreach($category as $cate)
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
                        <input autocomplete="off" id="slug" type="text" name="slug" value="{{old('slug')}}" class="form-control" id="" placeholder="">
                        <span class="text-danger error-text slug_error"></span>
                    </div>
                </div>
                <button type="submit" name="time" class="mt-4 mb-4 btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#main_form").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(data) {
                    if (data.status == 0) {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        $('#main_form')[0].reset();
                        alert(data.msg);
                    }
                }
            });
        })
    })
</script>

@endsection