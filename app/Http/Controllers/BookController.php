<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // public function createBooks()
    // {
    //     for ($i = 0; $i < 20; $i++) {
    //         $book = new Book();
    //         $book->isbn = 'ISBN' . ($i + 1); // Example ISBN format
    //         $book->title = 'Book Title ' . ($i + 1);
    //         $book->author = 'Author Name';
    //         $book->description = 'Description of the book';
    //         $book->date_published = now(); // Example date
    //         $book->save();
    //     }
    // }

}
