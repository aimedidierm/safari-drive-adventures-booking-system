<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => '2',
            'name' => 'Deafult Client',
            'email' => 'client@example.com',
            'phone' => '254769068699',
            'password' => bcrypt('password'),
            'role' => UserRole::CLIENT->value,
        ]);
    }
}
