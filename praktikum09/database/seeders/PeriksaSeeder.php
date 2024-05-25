<?php

namespace Database\Seeders;

use App\Models\Periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periksa::insert([
            [
                'tanggal' => '2024-12-02',
                'berat' => '56',
                'tinggi' => '159',
                'tensi' => '90',
                'keterangan' => 'sehat',
            ],
            [
                'tanggal' => '2017-10-16',
                'berat' => '78',
                'tinggi' => '178',
                'tensi' => '100',
                'keterangan' => 'sehat',
            ],
            [
                'tanggal' => '2022-05-25',
                'berat' => '76',
                'tinggi' => '180',
                'tensi' => '200',
                'keterangan' => 'tidak sehat',
            ],
            [
                'tanggal' => '2023-01-26',
                'berat' => '70',
                'tinggi' => '160',
                'tensi' => '85',
                'keterangan' => 'tidak sehat',
            ],
            [
                'tanggal' => '2024-03-20',
                'berat' => '52',
                'tinggi' => '150',
                'tensi' => '150',
                'keterangan' => 'sehat',
            ],
        ]);
    }
}
