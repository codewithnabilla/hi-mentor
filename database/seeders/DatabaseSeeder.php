<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Program;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Nabilla',
            'username' => 'nabilla',
            'email' => 'nabilla@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'mentor'
        ]);
        User::create([
            'name' => 'Maharani',
            'username' => 'maharani',
            'email' => 'maharani@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'student'
        ]);


        Category::create([
            'name' => 'Web Programming',

        ]);
        Category::create([
            'name' => 'Digital Marketing',

        ]);
        Category::create([
            'name' => 'Data Analyst',

        ]);

        Program::factory()->count(10)->create();
    }
}
