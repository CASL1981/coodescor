<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Partner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nit' => $this->faker->numberBetween(801000001,801010000),
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'logo' => 'coodescor.jpg',
            'order' => random_int(1,20),
            'status' => true,
            'enabled' => true,
        ];
    }
}
