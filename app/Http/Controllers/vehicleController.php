<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;
use App\Models\users;
use App\Models\driver;

class vehicleController extends Controller
{
    public function kendaraan_umum(Request $request)
    {

        return view('kendaraan_umum');
    }

    public function kendaraan_tambang()
    {
        return view('kendaraan_tambang');
    }

    public function kendaraan_barang(Request $request)
    {
        $jenisBahanBakar = $request->input('bahan_bakar');
        $data = vehicle::where('fuel', $jenisBahanBakar)->where('status_order', 'available')->get();
        $driver = driver::where('status_driver', 'available')->get();
        $users = users::where('role', 'approval')->get();

        return view('kendaraan_barang', ['vehicle' => $data, 'driver' => $driver, 'users' => $users]);
    }
}
