<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class siswasseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $getIdkelas = DB::table("kelazs")->insertGetId([
            'id_kelas'=> rand(1,10),
            'nama_kelas'=> Str::random(10),
            'kompentensi_keahlian' => Str::random(50),
        ]);
        $getIdspp = DB::table('spps')->insertGetId([
            'id_spp' => random_int(2,10),
            'tahun'=> random_int(2000,2024),
            'nominal' => random_int(1,20),
        ]);
        DB::table('siswas')->insert([
          'nisn'=> rand(1,50),
            'nis'=> rand(1,10),
            'nama' => "Lucifer",
            'id_kelas' => $getIdkelas,
            'alamat' => "jakarta",
            'no_telp' => '087885484764',
            'id_spp' => $getIdspp,
        ]);
    }
}
