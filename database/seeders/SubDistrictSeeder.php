<?php

namespace Database\Seeders;

use App\Models\Subdistrict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subdistrict::create(['name' => 'Cimahi', 'id_district' => 1]);
        Subdistrict::create(['name' => 'Banyumanik', 'id_district' => 2]);
        Subdistrict::create(['name' => 'Rungkut', 'id_district' => 3]);
    }
}
