<?php

namespace Database\Factories;

use App\Models\RdvComCli;
use Illuminate\Database\Eloquent\Factories\Factory;

class RdvComCliFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RdvComCli::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DateRdv' => $this->faker->dateTimeAD($max = 'now', $timezone = null), 
            'employe_id' => $this->faker->boolean(50) ? $this->faker->numberBetween($min = 1, $max = 3) : null,
            'client_id' => $this->faker->numberBetween($min = 1, $max = 50),
        ];
    }
}
