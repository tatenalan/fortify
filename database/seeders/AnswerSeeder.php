<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'description' => 'NADA DESARROLLADO',
                'value' => 2,
            ],
            [
                'description' => 'POCO DESARROLLADO',
                'value' => 4,
            ],
            [
                'description' => 'ALGO DESARROLLADO',
                'value' => 6,
            ],
            [
                'description' => 'BASTANTE DESARROLLADO',
                'value' => 8,
            ],
            [
                'description' => 'MUY DESARROLLADO',
                'value' => 10,
            ]
        ]);
    }
}
