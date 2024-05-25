<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;
    protected $table = "unit_kerjas";    //nama table yang digunakan

    //kolom yang dapat diisi di table unitkerja
    protected $fillable = [
        'nama',
    ];
}
