<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => '1',
            'name' => 'Deafult Admin',
            'email' => 'test@example.com',
            'phone' => '0769068699',
            'password' => bcrypt('password'),
            'role' => UserRole::ADMIN->value,
        ]);
    }
}
