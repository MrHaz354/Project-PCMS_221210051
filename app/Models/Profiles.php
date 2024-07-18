<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table = "profiles";
    protected $fillable = [
        'tahun_kerja',
        'pekerjaan',
        'perusahaan',
        'lokasi_perusahan',
        'deskripsi1',
        'tahun_masuk',
        'universitas',
        'lokasi_univ',
        'jurusan',
        'deskripsi2',
        'hard_skill_1',
        'hard_skill_2',
        'hard_skill_3',
        'soft_skill_1',
        'soft_skill_2',
        'soft_skill_3',

    ];
    public $timestamps = false;

}