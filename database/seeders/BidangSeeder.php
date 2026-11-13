<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    public function run(): void
    {
        $bidang = [
            [
                'kode_bidang' => 'SEK',
                'nama_bidang' => 'Sekretariat',
            ],
            [
                'kode_bidang' => 'UMUM',
                'nama_bidang' => 'Bidang Umum dan Kepegawaian',
            ],
            [
                'kode_bidang' => 'REN',
                'nama_bidang' => 'Bidang Perencanaan',
            ],
            [
                'kode_bidang' => 'TEKNIS',
                'nama_bidang' => 'Bidang Teknis/Operasional',
            ],
        ];

        foreach ($bidang as $data) {
            Bidang::firstOrCreate(
                [
                    'kode_bidang' => $data['kode_bidang'],
                ],
                [
                    'nama_bidang' => $data['nama_bidang'],
                    'is_active' => true,
                ]
            );
        }
    }
}
