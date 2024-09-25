<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Deafult Admin',
            'email' => 'test@example.com',
            'phone' => '0769068699',
            'password' => bcrypt('password'),
            'role' => UserRole::ADMIN->value,
        ]);
    }
}
