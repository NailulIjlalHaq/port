<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadiri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'tmp_lahir',
        'tgl_lahir',
        'jns_kelamin',
        'gol_darah',
        'alamat',
        'agama',
        'hobby',
        'telepon',
    ];
}
