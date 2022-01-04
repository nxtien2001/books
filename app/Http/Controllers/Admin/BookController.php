<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(50);
        return view('admin.book.index', compact('books'));
    }
    public function create()
    {
        $category = Category::all();
        return view('admin.book.create', compact('category'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path('cover/'), $imageName);
            $books = new Book([
                'name' => $request->name,
                'cate_id' => $request->cate_id,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'author' => $request->author,
                'dimension' => $request->dimension,
                'publisher' => $request->publisher,
                'page' => $request->page,
                'book_cover' => $request->book_cover,
                'slug' => $request->slug,
                'cover' => $imageName,
                'detail' => $request->detail
            ]);
            $books->save();
        }
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['book_id'] = $books->id;
                $request['image'] = $imageName;
                $file->move(\public_path('/images'), $imageName);
                Image::create($request->all());
            }
        }
        return redirect()->route('admin.books.index')->with('alert', 'Thêm dữ liệu thành công!');
    }
    public function edit($id)
    {
        $category = Category::all();
        $books = Book::find($id);
        return view('admin.book.edit', compact('books', 'category'));
    }
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $ext = $file->getClientOriginalExtension();
            $fileImage = time() . '.' . $ext;
            $file->move(public_path('cover'), $fileImage);
            $book->cover = $fileImage;
        } else {
            $image_old = Book::find($id);
            $fileImage = $image_old->cover;
        }
        $book->update([
            'name' => $request->name,
            'cate_id' => $request->cate_id,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'author' => $request->author,
            'dimension' => $request->dimension,
            'publisher' => $request->publisher,
            'page' => $request->page,
            'book_cover' => $request->book_cover,
            'slug' => $request->slug,
            'cover' => $book->cover,
            'detail' => $request->detail
        ]);
        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . "_" . $file->getClientOriginalName();
                $request["book_id"] = $id;
                $request["image"] = $imageName;
                $file->move(public_path("images"), $imageName);
                Image::create($request->all());
            }
        }
        return redirect()->route('admin.books.index')->with('message', 'Cập nhật dữ liệu thành công!');
    }
    public function show($id)
    {
        $bookshow =  Book::find($id);
        return view('admin.book.show', compact('bookshow'));
    }
    public function delete($id)
    {
        $books = Book::find($id);
        $books->images()->delete($id);
        $books->delete($id);
        return redirect()->back()->with('message', 'Xóa dữ liệu thành công!');
    }
    public function deleteCover($id)
    {
        $cover = Book::findOrFail($id)->cover;
        if (File::exists("cover/" . $cover)) {
            File::delete("cover/" . $cover);
        }
        Book::find($id)->delete();
        return redirect()->back();
    }
    public function deleteImage($id)
    {
        $images = Image::findOrFail($id);
        if (File::exists("images/" . $images->image)) {
            File::delete("images/" . $images->image);
        }
        Image::find($id)->delete();
        return redirect()->back();
    }
}
