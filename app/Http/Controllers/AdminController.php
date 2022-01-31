<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homeAwal()
    {
        $storage_path = storage_path();
        $data = json_decode(file_get_contents($storage_path . "/data.json"), true);
        $jumlahData = count($data);
        return view('home', ['dataBarang' => $data, 'jumlahData' => $jumlahData]);
    }
}
