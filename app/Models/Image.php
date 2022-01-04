<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images_book';
    protected $fillable = ['image','book_id'];
    public function books(){
        return $this->belongsTo(Book::class,'book_id');
    }
}
