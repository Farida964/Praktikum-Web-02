<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $table = "periksas";    //nama table yang digunakan

    //kolom yang dapat diisi di table dokter
    protected $fillable = [
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
    ];
}
