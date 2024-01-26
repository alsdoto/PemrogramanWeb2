<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Wahyu Safrizal', 'nik' => '1111111111111', 'jenis_kelamin' => 'Laki-Laki', 'foto' => 'sample.jpg', 'alamat' => 'Bandung barat', 'tempat_lahir' => 'Bandung', 'tanggal_lahir' => '2000-05-02', 'no_hp' => '08230000000', 'email' => 'wahyusafrizal174@gmail.com', 'jabatan' => 'Senior Programmer'],
            ['nama' => 'Alma Sulaiman',  'nik' => '2222222222222', 'jenis_kelamin' => 'Laki-Laki', 'foto' => 'sample.jpg', 'alamat' => 'Bandung barat', 'tempat_lahir' => 'Bandung', 'tanggal_lahir' => '2000-05-02', 'no_hp' => '08230000000', 'email' => 'almasulaiman@gmail.com', 'jabatan' => 'Senior Programmer'],
        ];
        Karyawan::insert($data);
    }
}
