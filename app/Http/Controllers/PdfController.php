<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Penjualan',
            'date' => date('d-m-Y'),
            'sales' => [
                ['product' => 'Produk A', 'quantity' => 10, 'price' => 100000],
                ['product' => 'Produk B', 'quantity' => 5, 'price' => 200000],
            ],
        ];

        $pdf = Pdf::loadView('sales', $data);

        // Mengunduh file PDF
        return $pdf->download('laporan-penjualan.pdf');
    }

    public function streamPDF()
    {
        $data = [
            'title' => 'Laporan Penjualan',
            'date' => date('d-m-Y'),
            'sales' => [
                ['product' => 'Produk A', 'quantity' => 10, 'price' => 100000],
                ['product' => 'Produk B', 'quantity' => 5, 'price' => 200000],
            ],
        ];

        $pdf = Pdf::loadView('sales', $data);

        // Menampilkan PDF langsung di browser
        return $pdf->stream('laporan-penjualan.pdf');
    }
}
