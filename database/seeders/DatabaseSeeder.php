<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnswerSeeder::class);
        $this->call(DimensionSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(FormSeeder::class);
        $this->call(UserSeeder::class);
        \App\Models\Question::factory(150)->create();
        // \App\Models\Result::factory(300)->create();
    }
}
