@extends('admin.layout.layout')
@section('title', 'Quản lý danh mục')
@section('route', 'Danh mục')
@section('category-menu', 'actives')
@section('main-content')
<br>
<div>
    @if(session('alert'))
    <div class="text-success">{{session('alert')}}</div>
    @endif
    @if(session('message'))
    <div class="text-success">{{session('message')}}</div>
    @endif
    @if(session('success'))
    <div class="text-success">{{session('success')}}</div>
    @endif
</div>
<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <table id="style-3" class="table style-3  table-hover">
                    <thead>
                        <tr>
                            <th class="checkbox-column text-center"> # </th>
                            <th>Tên danh mục</th>
                            <th>Danh mục cha</th>
                            <th>Slug</th>
                            <th class="text-center dt-no-sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $item)
                        <tr>
                            <td class="checkbox-column text-center">{{$key+1}} </td>
                            <td>{{$item->name}}</td>
                            <td>
                                @if($item->parent_id == 0 )
                                <div class="text-danger">Đây là danh mục cha</div>
                                @else
                                @foreach($cateChildrent as $cate_child)
                                @if($cate_child->id == $item->parent_id)
                                <p style="color: green;font-weight: bold">{{$cate_child->name}}</p>
                                @endif
                                @endforeach
                                @endif
                            </td>
                            <td>{{$item->slug}}</td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    <li><a href="{{route('admin.categories.edit',['id'=>$item->id])}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg></a></li>
                                    <li><a href="{{route('admin.categories.delete',['id'=>$item->id])}}" onclick="return confirm('Xóa?')" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg></a></li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection