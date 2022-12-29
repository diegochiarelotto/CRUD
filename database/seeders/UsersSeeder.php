<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diego Camilo',
            'email' => 'diegocamiloaps@gmail.com',
            'password' => bcrypt('15261234'),
            'login' => 'Admin'
        ]);
    }
}
