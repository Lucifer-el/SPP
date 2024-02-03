<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelaz extends Model
{
    use HasFactory;
    protected $table = 'kelaz';
    protected $primarykey = 'id_kelas';

    protected $fillable = [
        'nama_kelas',
        'kompetensi_keahlian'
    ];

}
