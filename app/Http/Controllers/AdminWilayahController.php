<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminWilayah;
use App\Models\Wilayah_Kelurahan;
use Illuminate\Http\Request;

class AdminWilayahController extends Controller
{
    /**
     * Menampilkan daftar admin wilayah.
     */
    public function index()
    {
        $admins = AdminWilayah::all();
        return view('admin_wilayah.index', compact('admins'));
    }

    /**
     * Menampilkan form untuk membuat admin wilayah baru.
     */
    public function create()
    {
        $kelurahan = Wilayah_Kelurahan::all();
        return view('admin_wilayah.create', compact('kelurahan'));
    }

    /**
     * Menyimpan admin wilayah baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:20',
            'email' => 'required|email|max:20',
            'password' => 'required|string|max:20',
            'id_kelurahan' => 'required|integer',
        ]);

        AdminWilayah::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'id_kelurahan' => $request->id_kelurahan,
        ]);

        return redirect()->route('admin_wilayah.index')->with('success', 'Admin Wilayah berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit admin wilayah.
     */
    public function edit($id_admin_wilayah)
    {
        $admin = AdminWilayah::findOrFail($id_admin_wilayah);
        $kelurahan = Wilayah_Kelurahan::all();
        return view('admin_wilayah.edit', compact('admin', 'kelurahan'));
    }

    /**
     * Mengupdate admin wilayah yang ada di database.
     */
    public function update(Request $request, $id_admin_wilayah)
    {
        $request->validate([
            'username' => 'required|string|max:20',
            'email' => 'required|email|max:20',
            'password' => 'required|string|max:20',
            'id_kelurahan' => 'required|integer',
        ]);

        $admin = AdminWilayah::findOrFail($id_admin_wilayah);

        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->id_kelurahan = $request->id_kelurahan;

        $admin->save();

        return redirect()->route('admin_wilayah.index')->with('success', 'Admin Wilayah berhasil diperbarui.');
    }

    /**
     * Menghapus admin wilayah dari database.
     */
    public function destroy($id_admin_wilayah)
    {
        $admin = AdminWilayah::findOrFail($id_admin_wilayah);
        $admin->delete();

        return redirect()->route('admin_wilayah.index')->with('success', 'Admin Wilayah berhasil dihapus.');
    }
}
