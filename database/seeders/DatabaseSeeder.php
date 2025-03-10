<?php

namespace Database\Seeders;

// use App;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'admin@admin.com',
        ]);

        if (\App::environment('local')) {
            $this->call(DemoSeeder::class);
        }
    }
}
