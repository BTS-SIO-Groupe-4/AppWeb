<?php

namespace Database\Factories;

use App\Models\Employes;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomEmp' => $this->faker->lastname(),
            'PrenomEmp' => $this->faker->firstname(),
            'TelEmp' => $this->faker->numerify('0#########'),
            'MailEmp' => $this->faker->unique()->safeEmail(),
            'MdpEmp' => $this->faker->numerify(),
            'PosteEmp' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
