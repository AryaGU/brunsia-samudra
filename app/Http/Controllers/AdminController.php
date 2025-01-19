<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function data_pengiriman()
    {
        $pengiriman = Pengiriman::all();
        return view('admin.data_pengiriman', compact('pengiriman'));
    }

    public function tambah_data_pengiriman()
    {
        return view('admin.tambah_data');
    }

    public function store_data_pengiriman(Request $request)
    {
        $request->validate([
            'negara_pengirim' => 'required|string|max:255',
            'nama_pengirim' => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'bank_penerima' => 'required|string|max:255',
            'nomor_rekening' => 'required|numeric',
            'alamat' => 'required|string',
        ]);

        Pengiriman::create($request->all());

        return redirect()->route('data_pengiriman')->with('success', 'Data pengiriman berhasil ditambahkan!');
    }

    public function laporan_pengiriman()
    {
        // Ambil data pengiriman
        $pengiriman = Pengiriman::all();

        // Generate PDF menggunakan view khusus
        $pdf = Pdf::loadView('pdf.laporan_pengiriman', compact('pengiriman'));

        // Unduh PDF
        return $pdf->download('laporan_pengiriman.pdf');
    }
}
