<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssignProjek;

class AssignProjekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['karyawan_id' => 1, 'projek_id' => 1],
            ['karyawan_id' => 2, 'projek_id' => 2],
            ['karyawan_id' => 1, 'projek_id' => 2],
            ['karyawan_id' => 2, 'projek_id' => 1],
        ];
        AssignProjek ::insert($data);
    }
}
