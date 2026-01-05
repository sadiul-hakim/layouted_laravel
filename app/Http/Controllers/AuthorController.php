<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AuthorController extends Controller
{
    //

    public function findAll(): Collection{
        return Author::all();
    }

    public function find(int $id){
        return Author::with("book") -> find($id);
    }
}
