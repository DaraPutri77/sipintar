<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Menampilkan halaman registrasi.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Memproses registrasi Peminta Barang.
     */
    public function store(Request $request): RedirectResponse
    {
        // Membersihkan input.
        $request->merge([
            'name' => trim((string) $request->input('name')),
            'email' => strtolower(
                trim((string) $request->input('email'))
            ),
        ]);

        // Validasi data registrasi.
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        // Membuat akun Peminta Barang.
        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];

        // Bidang tidak lagi diwajibkan.
        $user->bidang_id = null;

        // Role dan status ditentukan oleh sistem.
        $user->role = User::ROLE_PEMINTA;
        $user->is_active = true;

        $user->save();

        // Kembali ke halaman login.
        return redirect()
            ->route('login')
            ->with(
                'status',
                'Pendaftaran berhasil! Akun SIPINTAR Anda sudah aktif. Silakan masuk menggunakan email dan kata sandi yang telah didaftarkan.'
            );
    }
}
