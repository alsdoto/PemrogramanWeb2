<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projek;

class ProjekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_projek' => 'Aplikasi Sistem Informasi Akademik', 'tanggal_mulai' => '2023-01-01', 'tanggal_selesai' => '2024-01-01'],
            ['nama_projek' => 'Aplikasi Sistem Informasi PMB', 'tanggal_mulai' => '2023-01-01', 'tanggal_selesai' => '2024-01-01'],
            ['nama_projek' => 'Aplikasi Sistem Informasi Apotik', 'tanggal_mulai' => '2023-01-01', 'tanggal_selesai' => '2024-01-01'],
        ];
        Projek::insert($data);
    }
}
