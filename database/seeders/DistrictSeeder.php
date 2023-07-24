<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create(['name' => 'Bandung', 'id_province' => 1]);
        District::create(['name' => 'Semarang', 'id_province' => 2]);
        District::create(['name' => 'Surabaya', 'id_province' => 3]);
    }
}
