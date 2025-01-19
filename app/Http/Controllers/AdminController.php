<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function data_pengiriman()
    {
        return view('admin.data_pengiriman');
    }

    public function tambah_data_pengiriman()
    {
        return view('admin.tambah_data');
    }
}
