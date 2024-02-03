<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primarykey = 'nisn';

    protected $fillable = [
        'nisn',
        'nama',
        'id_kelas',
        'nis',
        'no_tlp',
        'alamat',
        'id_spp',
    ];
}
