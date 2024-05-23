<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'HARIYANTO S. AUNA',
            'email' => 'hariyantosauna@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        User::factory()->create([
            'name' => 'SAIDA ULFA',
            'email' => 'saidaulfa@demo.com',
            'password' => Hash::make('12345'),
        ]);

        User::factory()->create([
            'name' => 'YERRY SOEPRAPTO',
            'email' => 'yerrysoeprapto@demo.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
