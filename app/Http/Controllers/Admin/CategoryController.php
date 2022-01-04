<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $cateChildrent = Category::where('parent_id', 0)->orderBy('id', 'DESC')->get();
        $categories = Category::latest()->paginate(100);
        return view('admin.category.index', compact('categories', 'cateChildrent'));
    }
    public function create()
    {
        $category = Category::where('parent_id', 0)->get();
        return view('admin.category.create', compact('category'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories|max:100'
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $values = [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => $request->slug
            ];
            $query = Category::create($values);
            if ($query) {
                return \response()->json(['status' => 1, 'msg' => 'Thêm dữ liệu thành công!']);
            }
        }
        //        Category::create($request->all());
        //        return redirect()->route('admin.categories.index')->with('alert', 'Thêm dữ liệu thành công!');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::find($id)->where('parent_id', 0)->get();
        return view('admin.category.edit', compact('category', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories|max:100'
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $values = [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => $request->slug
            ];
            $query = Category::find($id)->update($values);
            if ($query) {
                return \response()->json(['status' => 1, 'msg' => 'Cập nhật dữ liệu thành công!']);
            }
        }
        // Category::find($id)->update($request->all());
        // return redirect()->route('admin.categories.index')->with('success', 'Cập nhật dữ liệu thành công!');
    }
    public function delete($id)
    {
        $cate = Category::find($id);
        $cate->childrent()->delete($id);
        $cate->delete($id);
        return redirect()->route('admin.categories.index', compact('cate'))->with('message', 'Xóa dữ liệu thành công!');
    }
}
