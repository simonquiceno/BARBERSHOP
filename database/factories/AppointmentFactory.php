<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Barber;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Appointment::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'barber_id' => Barber::factory(),
            'fecha' => $this->faker->date,
            'hora' => $this->faker->time,
        ];
    }
}
