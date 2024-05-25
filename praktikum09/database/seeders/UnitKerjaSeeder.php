<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitKerja::insert([
            [
                'nama' => 'Dr. John Doe',
            ],
            [
                'nama' => 'Dr. Jane Doe',
            ],
            [
                'nama' => 'Dr. Sarah Johnson',
            ],
            [
                'nama' => 'Dr. Michael Smith',
            ],
        ]);
    }
}
