<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreatePengurusBarang extends Command
{
    protected $signature = 'sipintar:create-pengurus';

    protected $description = 'Membuat akun Pengurus Barang SIPINTAR';

    public function handle(): int
    {
        // Input nama lengkap
        $name = trim((string) $this->ask('Nama lengkap'));

        // Input email
        $email = strtolower(
            trim((string) $this->ask('Alamat email'))
        );

        // Validasi nama dan email
        $validator = Validator::make(
            [
                'name' => $name,
                'email' => $email,
            ],
            [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'unique:users,email',
                ],
            ]
        );

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }

        // Input password secara tersembunyi
        $password = (string) $this->secret(
            'Password (minimal 8 karakter)'
        );

        // Validasi panjang password
        if (mb_strlen($password) < 8) {
            $this->error(
                'Password harus minimal 8 karakter.'
            );

            return self::FAILURE;
        }

        // Konfirmasi password
        $confirmation = (string) $this->secret(
            'Konfirmasi password'
        );

        if (! hash_equals($password, $confirmation)) {
            $this->error(
                'Konfirmasi password tidak cocok.'
            );

            return self::FAILURE;
        }

        // Membuat akun Pengurus Barang
        $user = new User();

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->role = User::ROLE_PENGURUS_BARANG;
        $user->is_active = true;
        $user->bidang_id = null;

        $user->save();

        // Informasi keberhasilan
        $this->newLine();

        $this->info(
            'Akun Pengurus Barang berhasil dibuat!'
        );

        $this->line('Nama  : ' . $user->name);
        $this->line('Email : ' . $user->email);
        $this->line('Role  : ' . $user->role);
        $this->line('Status: Aktif');

        return self::SUCCESS;
    }
}
