<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Obtener los roles por 'nombre'
         $adminRole = Role::where('nombre', 'Admin')->first();
         $clientRole = Role::where('nombre', 'Client')->first();
 
         // Crear usuarios y asignarles roles usando el campo 'role_id'
         User::factory(2)->create()->each(function ($user) use ($adminRole) {
             // Asignar el role_id antes de guardar el usuario
             $user->role_id = $adminRole->id;  // Asignar el id del rol Admin
             $user->save();
         });
 
         User::factory(4)->create()->each(function ($user) use ($clientRole) {
             // Asignar el role_id antes de guardar el usuario
             $user->role_id = $clientRole->id;  // Asignar el id del rol Client
             $user->save();
         });
    }
}
