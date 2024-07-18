<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    use HasFactory;
    protected $table = "homes";
    protected $fillable = [
        'foto',
        'keahlian',
        'deskripsi_keahlian',
        'about_me',
        'deskripsi_about_me',
    ];
    public $timestamps = false;

}
