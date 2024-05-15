<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // Menampilkan Halaman Home
    public function index()
    {
        $data = [
            'title' => 'Layanan BPTIK',
        ];
        return view('pages.front.index',  $data);
    }
}
