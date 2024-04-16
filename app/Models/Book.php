<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
//sss
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'description',
        'date_published',
    ];
}
