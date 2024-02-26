<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Auth;
use App\Models\ordering;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function index(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role_select = users::where('username', $request->username)->first();
            $role = $role_select->role;
            $id_users = $role_select->users_id;


            session(['role' => $role, 'id_users' => $id_users]);
            return redirect()->intended('/dashboard');
        }
        return redirect()->intended('/');
    }

    public function dashboard()
    {

        $bulan = ordering::select(DB::raw('MONTH(order_date) AS bulan'))->where('aprroval_status', 'approved')->distinct()->get();
        $jumlah = [1, 2, 3, 4]; // Misalnya, untuk jumlah Januari hingga April
        $dataTransaksi = [];

        foreach ($jumlah as $bulanIni) {
            $transaksiBulanIni = ordering::select(DB::raw('DATE(order_date) AS tanggal'))
                ->where('aprroval_status', 'approved')
                ->whereMonth('order_date', $bulanIni)
                ->count();

            $dataTransaksi[$bulanIni] = $transaksiBulanIni;
        }


        return view('dashboard', [
            'bulan' => $bulan,
            'dataTransaksi' => $dataTransaksi
        ]);
    }

    public function regis(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $hash = bcrypt($password);
        users::create([
            'username' => $username,
            'password' => $hash,
            'role' => 'approval'
        ]);
        return redirect()->intended('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
