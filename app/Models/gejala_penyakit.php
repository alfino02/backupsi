<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala_penyakit extends Model
{
    use HasFactory;
    protected $table = "gejala_penyakit";
    protected $primarykey = "id";
    protected $fillable = [
        'id_penyakit',
        'id_gejala',
    ];
}
