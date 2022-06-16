<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'nidn',
        'nama',
        'matkul_id',
    ];

    public function matkul()
    {
        return $this->hasOne(Matkul::class, 'id', 'matkul_id');
    }
}
