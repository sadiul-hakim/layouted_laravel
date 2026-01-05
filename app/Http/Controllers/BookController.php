<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function find(int $id) {
        return Book::with("author")->find($id);
    }
}
