<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $data = Siswa::latest()->get();
        return view("sekolahTable", compact("data"));
    }
}
