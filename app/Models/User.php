<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Daftar role pengguna SIPINTAR.
     */
    public const ROLE_PEMINTA = 'peminta';

    public const ROLE_PENGURUS_BARANG = 'pengurus_barang';

    /**
     * Atribut yang boleh diisi melalui mass assignment.
     *
     * Role dan is_active sengaja tidak dimasukkan
     * untuk mencegah pengguna mengubah hak akses sendiri.
     */
    protected $fillable = [
        'bidang_id',
        'name',
        'email',
        'password',
    ];

    /**
     * Atribut yang disembunyikan saat model diserialisasi.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Konversi tipe data atribut.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Relasi pengguna dengan bidang.
     */
    public function bidang(): BelongsTo
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }

    /**
     * Memeriksa apakah pengguna merupakan Peminta Barang.
     */
    public function isPeminta(): bool
    {
        return $this->role === self::ROLE_PEMINTA;
    }

    /**
     * Memeriksa apakah pengguna merupakan Pengurus Barang.
     */
    public function isPengurusBarang(): bool
    {
        return $this->role === self::ROLE_PENGURUS_BARANG;
    }
}
