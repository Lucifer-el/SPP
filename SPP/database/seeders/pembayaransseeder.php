<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Schema;
  use Illuminate\Support\Str;

class pembayaransseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $murid = DB::table('siswas')->first();
        $petugases = DB::table('petugazs')->first();
        $spp = DB::table('spps')->where('id_spp', $murid->id_spp)->first();
        DB::table("pembayarans")->insert([
            'id_pembayaran'=> rand(1,100),
            'id_petugas' => $petugases->id_petugas,
            'nisn' => $murid->nisn,
            'tanggal_bayar' => now(),
            'bulan_dibayar'=> Str::random(8),
            'tahun_dibayar'=> Str::random(4),
            'id_spp' => $spp->id_spp,
            'jumlah_bayar'=> rand(20, 105),
        ]);
    }
}
