<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\StaffData;

class StaffController extends Controller
{
    // Menampilkan semua data staff
    public function index()
    {
        $staffs = StaffData::all();
        return view('staff.index', compact('staffs'));
    }

    // Menampilkan detail salah satu staff
    public function show($id)
    {
        $staff = StaffData::find($id);
        if (!$staff) {
            abort(404);
        }
        return view('staff.show', compact('staff'));
    }
}
