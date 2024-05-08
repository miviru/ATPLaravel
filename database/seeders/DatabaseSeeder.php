<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(TorneoTableSeeder::class);
        $this->call(TenistaTableSeeder::class);
        $this->call(InscripcionTableSeeder::class);
    }
}
