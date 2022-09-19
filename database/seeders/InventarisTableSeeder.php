<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class InventarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['noinventaris' => '1001', 'namaalat' => 'laptop', 'Merk' => 'lenovo', 'hargasatuan' => '1000', 'jumlah' => '2', 'lokasi' => 'tu', 'kondisi' => 'bagus', 'tahunpembuatan' => '', 'usiabarang' => '4'],
            ['noinventaris' => '1002', 'namaalat' => 'pc', 'Merk' => 'acer', 'hargasatuan' => '2000', 'jumlah' => '3', 'lokasi' => 'tu', 'kondisi' => 'bagus', 'tahunpembuatan' => '', 'usiabarang' => '3'],
        ];

        // masukan data ke databse
        DB::table('inventaris')->insert($sampel);
    }
}
