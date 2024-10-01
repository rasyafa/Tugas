<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BookController extends Controller
{

    public function index()
        {
            // Array Assosiatif terdapat key ; id, title, dan author
            $bookList = [
                ['id' => 1, 'title' => 'Sagaras', 'author' => 'Tere Liye'],
                ['id' => 2, 'title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori'],
                ['id' => 3, 'title' => 'Harry Potter ', 'author' => 'J K Rowling'],
                ['id' => 4, 'title' => 'Diary of Canva', 'author' => 'Itakrn'],
                ['id' => 5, 'title' => 'Loving The Wounded Soul', 'author' => 'Regis Machdy'],
            ];

            // Pernyataan PHP yang mengembalikan tampilan home
            return view('home', ['books' => $bookList]);
        }

        // public function form(Request $request) {
        //     $dataName = $request->name;
        //     // Debug the request data
        //     @dd($dataName);
        // }

    // Method untuk menerima dan mengirim data dari form
    public function form(Request $request)
        {
            // Get data from request
            $dataMessage = $request->message;

            //Save data to section
            $request->session()->put('message', $dataMessage);

            // Redirect to home page
            return redirect('/book');
        }

    public function store()
        {
            $Product = new Product();
            $Product->nama_produk = "Laptop";
            $Product->harga = 10000;
            $Product->stok = 10;
            $Product->deskripsi = "laptop murah";
            $Product->save();

            return "data sukses dikirim";
        }

    public function show()
    {
        // Mengambil semua data produk
        $Products = Product::all();

        // Mengembalikan data ke view "tableProduct"
        return view('tableProduct', compact('Products'));
    }
}
