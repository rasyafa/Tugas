<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:2',
            'stok' => 'required|integer|min:50',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = new Product();
        $Product->nama_produk = $request->nama_produk;
                $Product->harga = $request->harga;
                $Product->stok = $request->stok;
                $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect('/show');
    }

    public function show()
        {
            // Mengambil semua data produk
            $Products = Product::Paginate(3);

            // Mengembalikan data ke view "tableProduct"
            return view('tableProduct', compact('Products'));
        }

    public function edit($id)
        {
            $Products = Product::findOrFail($id);

            return view("editProduct", compact("Products"));
        }

    public function update(Request $request, $id)
        {
            $Product = Product::findOrFail($id);

            $Product->nama_produk = $request->nama_produk;
            $Product->harga = $request->harga;
            $Product->stok = $request->stok;
            $Product->deskripsi = $request->deskripsi;
            $Product->save();

            return redirect('/show');
        }

    public function destroy($id)
        {
            $Products = Product::findOrFail($id);
            $Products->delete();

            return redirect('/show');
        }

    public function input(){
        return view("inputProduct");
    }
}
