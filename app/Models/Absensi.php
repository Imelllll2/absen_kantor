<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable = [
        "karyawan_id",
        "tanggal",
        "jam_masuk",
        "jam_keluar",
    ];

    // foreign to karyawan by karyawan_id
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

}
