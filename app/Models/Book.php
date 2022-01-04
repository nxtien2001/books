<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['name','cate_id','price','sale_price','author','dimension','publisher','page','book_cover','slug','cover','detail'];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
}
