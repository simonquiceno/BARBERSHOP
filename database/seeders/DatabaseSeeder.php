<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        $this->call([
            RoleSeeder::class,  // Primero, crear roles
            UserSeeder::class,  // Luego, crear usuarios con roles asignados
            SupplierSeeder::class,
            ServiceSeeder::class,
            BarberSeeder::class,
            ProductSeeder::class,
            AppointmentSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
