<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Patient; // assuming we have a Patient model
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Kesehatan',
            'date' => date('d-m-Y'),
            'patients' => Patient::all(), // retrieve all patients from the database
        ];

        $pdf = Pdf::loadView('health_report', $data); // updated view name

        // Mengunduh file PDF
        return $pdf->download('laporan-kesehatan.pdf');
    }

    public function streamPDF()
    {
        $data = [
            'title' => 'Laporan Kesehatan',
            'date' => date('d-m-Y'),
            'patients' => Patient::all(), // retrieve all patients from the database
        ];

        $pdf = Pdf::loadView('health_report', $data); // updated view name

        // Menampilkan PDF langsung di browser
        return $pdf->stream('laporan-kesehatan.pdf');
    }
}
