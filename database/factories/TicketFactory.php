<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Klasa;
use App\Models\Ticket;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'aviokompanija'=>$this->faker->title(),
          'zemlja_polaska'=>$this->faker->name(),
          'destinacija'=>$this->faker->name(),
          'user_id'=>User::factory(),
          'ticketClass_id'=>Klasa::factory(),
        ];
    }
}
