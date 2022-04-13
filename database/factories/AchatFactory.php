<?php

namespace Database\Factories;

use App\Models\Achat;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Achat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'IdCli' => $this->faker->numberBetween($min = 1, $max = 50),
            'IdEmp' => $this->faker->numberBetween($min = 1, $max = 50),
            'IdProd' => $this->faker->numberBetween($min = 1, $max = 50),
            'Qte' => $this->faker->numerify('####'),
        ];
    }
}
