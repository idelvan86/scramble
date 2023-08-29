<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as FakerFactory;

class Scrambles extends Model
{
    use HasFactory;


    protected $fillable = [
    'titulo',
    'texto_curto',
    'descricao'
    ];

    public static function createFakeData($count = 10)
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < $count; $i++) {
            self::create([
                'titulo' => $faker->sentence,
                'texto_curto' => $faker->sentence,
                'descricao' => $faker->paragraph,
            ]);
        }
    }

}
