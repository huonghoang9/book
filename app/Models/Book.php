<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table ="books";
    protected $fillable=[
        "book_name",
        'price',
        'publishing_year',
        'quantity',
        'image',
        'describe',
        'cate_id',
        'producer_id',
        'author_id'
    ];

    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }


    // Trong model Book
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }



}
