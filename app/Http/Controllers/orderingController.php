<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;
use App\Models\driver;
use App\Models\ordering;
use App\Models\users;

class orderingController extends Controller
{
    public function ordering(Request $request)
    {
        $approval1 = $request->input('approval1');
        $approval2 = $request->input('approval2');
        $id_vehicle = $request->input('id_vehicle');
        $order_driver = $request->input('driver');
        $tgl_pemesanan = $request->input('tgl_pemesanan');
        $id_approval1 = users::where('username', $approval1)->value('users_id');
        $id_approval2 = users::where('username', $approval2)->value('users_id');

        vehicle::where('vehicle_id', $id_vehicle)->update([
            'status_order' => 'ordered',
        ]);

        driver::where('driver_name', $order_driver)->update([
            'status_driver' => 'ordered',
        ]);
        $id_driver = driver::where('driver_name', $order_driver)->value('driver_id');
        $data_ordering = [
            'id_vehicle' => $id_vehicle,
            'order_date' => $tgl_pemesanan,
            'id_approval1' => $id_approval1,
            'id_approval2' => $id_approval2,
            'id_driver' => $id_driver,
            'status_approval1' => 0,
            'status_approval2' => 0,
            'aprroval_status' => 'waiting'
        ];

        ordering::create($data_ordering);

        return redirect()->route('dashboard');
    }
}
