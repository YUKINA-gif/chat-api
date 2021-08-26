<?php

namespace Database\Factories;

use App\Models\Nursery;
use Illuminate\Database\Eloquent\Factories\Factory;

class NurseryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nursery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
        ];
    }
}
