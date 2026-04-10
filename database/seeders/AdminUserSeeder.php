<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> 4ec54b9e (update terbaru)

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/AdminUserSeeder.php
public function run()
{
<<<<<<< HEAD
    \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password'),
        'role' => 'admin'
    ]);
=======
    User::updateOrCreate(
        ['email' => 'admin@gmail.com'],
        [
            'name' => 'Admin',
            'password' => 'password',
            'role' => User::ROLE_ADMIN,
        ]
    );
>>>>>>> 4ec54b9e (update terbaru)
}
}
