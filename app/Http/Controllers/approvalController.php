<?php

namespace App\Http\Controllers;

use App\Models\ordering;
use Illuminate\Http\Request;

class approvalController extends Controller
{
    public function approval()
    {

        $id_approval = session('id_users');
        $data_ordering = ordering::where(function ($query) use ($id_approval) {
            $query->where('id_approval1', $id_approval)
                ->where('status_approval1', 0);
        })
            ->orWhere(function ($query) use ($id_approval) {
                $query->where('id_approval2', $id_approval)
                    ->where('status_approval2', 0);
            })
            ->get();




        return view('list_order', [
            'data_ordering' => $data_ordering
        ]);
    }

    public function details($id)
    {

        $data_ordering = ordering::leftJoin('vehicle', 'vehicle.vehicle_id', '=', 'ordering.id_vehicle')
            ->leftJoin('tb_driver', 'tb_driver.driver_id', '=', 'ordering.id_driver')
            ->where('ordering.ordering_id', $id)->where('aprroval_status', 'waiting')
            ->first();


        return view('details', [
            'data_ordering' => $data_ordering
        ]);
    }

    public function approve($id)
    {
        $id_approval = session('id_users');
        $find_approval = ordering::where('ordering_id', $id)->where('id_approval1', $id_approval)->orWhere('id_approval2', $id_approval)->first();


        if ($find_approval) {
            if ($find_approval->id_approval1 === $id_approval) {
                ordering::where('ordering_id', $find_approval->ordering_id)->update(['status_approval1' => 1]);
            } elseif ($find_approval->id_approval2 === $id_approval) {

                ordering::where('ordering_id', $find_approval->ordering_id)->update(['status_approval2' => 1]);
            }
        }
        $check = ordering::where('ordering_id', $find_approval->ordering_id)->first();

        if ($check->status_approval1 == 1 && $check->status_approval2 == 1) {
            ordering::where('ordering_id', $check->ordering_id)->update(['aprroval_status' => 'approved']);
        }


        return redirect()->route('dashboard');
    }
}
