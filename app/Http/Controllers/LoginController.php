<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\StaffData;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Cari staff berdasarkan nama
        $staff = StaffData::findByNama($username);

        // Cek apakah ada staff dengan nama tersebut dan passwordnya cocok
        if ($staff && $staff['password'] == $password) {
            // Simpan data staff ke session
            session(['staff' => $staff]);
            return redirect('/staff/dashboard');
        }

        return back()->withErrors(['login_failed' => 'Nama atau password salah']);
    }

    public function logout()
    {
        session()->forget('staff');
        return redirect('/login');
    }
}
