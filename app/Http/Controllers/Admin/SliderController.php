<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::Orderby('id', 'DESC')->paginate(100);
        return view('admin.slider.index', compact('slider'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store(Request $request)
    {
        $sliders = new Slider();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileImage = time() . '.' . $ext;
            $file->move(public_path('cover'), $fileImage);
            $sliders->image = $fileImage;
        }
        $sliders =  Slider::create([
            'image' => $fileImage,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.sliders.index')->with('alert', 'Thêm dữ liệu thành công!');
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }
    public function update(Request $request, $id)
    {
        $sliders = new Slider();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileImage = time() . '.' . $ext;
            $file->move(public_path('cover'), $fileImage);
            $sliders->image = $fileImage;
        } else {
            $image_old = Slider::find($id);
            $fileImage = $image_old->image;
        }
        $sliders =  Slider::find($id)->update([
            'image' => $fileImage,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.sliders.index')->with('message', 'Cập nhật dữ liệu thành công!');
    }
    public function delete($id)
    {
        Slider::find($id)->delete();
        return redirect()->back()->with('success', 'Đã xóa dữ liệu thành công!');
    }
    public function active($slider_id)
    {
        Slider::where('id', $slider_id)->update(['status' => 0]);
        return redirect()->back()->with('active', 'Đã ẩn slider này!');
    }
    public function unactive($slider_id)
    {
        Slider::where('id', $slider_id)->update(['status' => 1]);
        return redirect()->back()->with('unactive', 'Đã hiển thị slider này!');
    }
}
