<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomCli' => $this->faker->lastname(),
            'PrenomCli' => $this->faker->firstname(),
            'AdresseCli' => $this->faker->streetAddress(),
            'VilleCli' => $this->faker->city(),
            'MailCli' => $this->faker->unique()->safeEmail(),
            'NumCli' => $this->faker->numerify('0#########'),
            'Prospect' => $this->faker->numerify('0'),
        ];
    }
}
