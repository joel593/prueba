<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreUser'=>$this->faker->name,
            'nombreCompleto'=>$this->faker->name,
            'email'=>$this->faker->email,
            'telefono'=>$this->faker->telefono,
            'edad'=>$this->faker->numberBetween(1,70),
            'dateBirth'=>$this->faker->date,
            'configuration_id'=>1,
        ];
    }
}
