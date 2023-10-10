<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::factory(5)->create();
        User::factory()->createOne([
            'name' => 'admin',
            'email' => 'admin@test.dev',
            'password' => 'password',
            'isAdmin' => true,
        ]);
    }
}