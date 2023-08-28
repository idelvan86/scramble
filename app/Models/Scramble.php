<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as FakerFactory;

class Scramble extends Model
{
    use HasFactory;


    protected $fillable = [
    'titulo',
    'texto_curto',
    'descricao'
    ];

}
