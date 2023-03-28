<?php

namespace Database\Factories;
use App\Models\Klasa;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klasa>
 */
class KlasaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vrsta'=>$this->faker->word(),
            'cena'=>$this->faker->word(),
        ];
    }
}
