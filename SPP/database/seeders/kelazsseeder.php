<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class kelazsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kelazs')->insert([
            'id_kelas' => rand(1,25),
            'nama_kelas' => Str::random(10),
            'kompentensi_keahlian'=>Str::random(50),
        ]);
        
    }
}
