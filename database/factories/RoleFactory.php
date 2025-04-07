<?php

namespace Database\Factories;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Role::class;
    public function definition(): array
    {
        // Definir roles fijos: Admin y Client
        $roles = ['Admin', 'Client'];

        // Seleccionar un rol fijo
        return [
            'nombre' => $roles[array_rand($roles)],  // Aleatorio entre Admin y Client
        ];
    }
}
