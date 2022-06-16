<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'waktu',
        'nim',
        'status',
        'matkul_id',
        'mahasiswa_id',
    ];

    public function mahasiswa()
    {
        // return $this->belongsTo(Model::class, 'foreign_key', 'owner_key');
        return $this->belongsTo(Mahasiswa::class, 'id', 'mahasiswa_id');
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id', 'matkul_id');
    }
}
