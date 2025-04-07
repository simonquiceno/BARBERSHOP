<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::factory(2)->create();

        $roles = ['Admin', 'Client'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['nombre' => $role]);
        }
    }
}
