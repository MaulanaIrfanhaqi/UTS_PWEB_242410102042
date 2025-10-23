<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
      
        $dataMobil = [
            [
                'id' => 1,
                'merek' => 'Toyota Avanza',
                'tahun' => 2022,
                'warna' => 'Putih',
                'plat' => 'P 1234 AB',
                'harga_sewa' => 350000,
                'status' => 'Tersedia'
            ],
            [
                'id' => 2,
                'merek' => 'Honda Jazz',
                'tahun' => 2021,
                'warna' => 'Merah',
                'plat' => 'P 5678 CD',
                'harga_sewa' => 400000,
                'status' => 'Tersedia'
            ],
            [
                'id' => 3,
                'merek' => 'Daihatsu Xenia',
                'tahun' => 2023,
                'warna' => 'Silver',
                'plat' => 'P 9101 EF',
                'harga_sewa' => 320000,
                'status' => 'Disewa'
            ],
            [
                'id' => 4,
                'merek' => 'Mitsubishi Pajero',
                'tahun' => 2022,
                'warna' => 'Hitam',
                'plat' => 'P 1213 GH',
                'harga_sewa' => 750000,
                'status' => 'Tersedia'
            ],
            [
                'id' => 5,
                'merek' => 'Suzuki Ertiga',
                'tahun' => 2021,
                'warna' => 'Biru',
                'plat' => 'P 1415 IJ',
                'harga_sewa' => 330000,
                'status' => 'Tersedia'
            ],
            [
                'id' => 6,
                'merek' => 'Toyota Innova',
                'tahun' => 2023,
                'warna' => 'Abu-abu',
                'plat' => 'P 1617 KL',
                'harga_sewa' => 500000,
                'status' => 'Disewa'
            ]
        ];

        return view('pengelolaan', compact('dataMobil', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}