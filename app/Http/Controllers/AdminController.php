<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan daftar semua admin
    public function index() {
        $admins = Admin::all(); // Ambil semua data admin
        return view('admin.index', compact('admins'));
    }

    // Menampilkan halaman untuk menambah admin baru
    public function create() {
        return view('admin.create');
    }

    // Menyimpan data admin baru
    public function store(Request $request) {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:admins',
            'username' => 'required|unique:admins',
            'password' => 'required|min:6',
            'role' => 'required|in:pendaftaran,keuangan,akademik',
        ]);

        // Menyimpan data admin ke database
        Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Enkripsi password
            'role' => $request->role,
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan!');

    }
}
