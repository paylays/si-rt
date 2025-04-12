<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'warga')->get();
        return view('admin.manajemen-pengguna.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|digits:16|unique:users,nik',
            'name' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'warga',
        ]);

        return redirect()->route('manajemen-pengguna.index')->with('success', 'Tambah Pengguna Berhasil.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.manajemen-pengguna.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nik' => 'required|digits:16|unique:users,nik,' . $user->id,
            'name' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'nik' => $request->nik,
            'name' => $request->name,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('manajemen-pengguna.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('manajemen-pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }

}
