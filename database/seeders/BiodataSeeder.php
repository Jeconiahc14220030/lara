<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("biodata")->insert([
            'nama' => 'TES',
            'tahun_masuk' => 2020,
            'tgl_lahir' => '2020-02-02',
            'alamat' => 'Surabaya',
            'is_aktif' => '1',
            'notelp' => '123',
        ]);

        DB::table('biodata')->insert(['nama'=>'TES2','tahun_masuk'=>2000,'tgl_lahir'=>'2000-02-02','alamat'=>'Surabaya','is_aktif'=>1,'notelp'=>'123']);
        DB::table('biodata')->insert(['nama'=>'TES3','tahun_masuk'=>2002,'tgl_lahir'=>'2001-01-01','alamat'=>'Jakarta','is_aktif'=>1,'notelp'=>'456']);
        DB::table('biodata')->insert(['nama'=>'TES4','tahun_masuk'=>2004,'tgl_lahir'=>'2001-03-03','alamat'=>'Bandung','is_aktif'=>1,'notelp'=>'789']);



    }
}
