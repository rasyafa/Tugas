<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index()
    {
        // Array Assosiatif terdapat key ; id, title, dan author
        $books = [
            ['id' => 1, 'title' => 'Sagaras', 'author' => 'Tere Liye'],
            ['id' => 2, 'title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori'],
            ['id' => 3, 'title' => 'Harry Potter ', 'author' => 'J K Rowling'],
            ['id' => 4, 'title' => 'Diary of Canva', 'author' => 'Itakrn'],
            ['id' => 5, 'title' => 'Loving The Wounded Soul', 'author' => 'Regis Machdy'],
        ];

        // Pernyataan PHP yang mengembalikan tampilan home
        return view('home', ['books' => $books]);
    }
}
