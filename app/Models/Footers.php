<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\NullableType;

class Footers extends Model
{
    use HasFactory;
    protected $table = "footers";
    protected $fillable = [
        'copyright',
        'socialmedialink1',
        'socialmedialink2',
        'socialmedialink3',
        'pagelink1',
        'pagelink2',
        'pagelink3'
    ];
    public $timestamps = false;

}