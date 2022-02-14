<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Dakota',
            'last_name' => 'Developers',
            'company' => 'Dakota Developers',
            'role' => 'admin',
            'email' => 'info@dakotadevelopers.com',
            'email_verified_at' => now(),
            'password' => bcrypt('devs2020'),
            'remember_token' => Str::random(10), 
        ]);

        $admin->forms()->attach([
            rand(1,10) => ['result' => rand(1,10)],
            rand(11,20) => ['result' => rand(1,10)],
            rand(20,36) => ['result' => rand(1,10)]  
        ]);

        $users = User::factory(10)->create();

        foreach ($users as $user) {
            $user->forms()->attach([
                rand(1,10) => ['result' => rand(1,10)],
                rand(11,20) => ['result' => rand(1,10)],
                rand(20,36) => ['result' => rand(1,10)]  
            ]);
        }
    }
}
