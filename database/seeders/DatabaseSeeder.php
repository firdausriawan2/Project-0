<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'M.Firdaus Riawan',
            'email' => 'firdausriawan2@gmail.com',
            'password' => '$2y$12$f1G2DhId8iHZzT.Jk1CcX.Ewcv2YUwTVziaABPrUn6VS5HNenOwGy',
            'email_verified_at' => now(),
        ]);
    }
}
