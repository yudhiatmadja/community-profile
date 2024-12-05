<?php

namespace Database\Factories;

use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class TestimoniFactory extends Factory
{
    protected $model = Testimoni::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'testi' => $this->faker->paragraph,
        ];
    }
}
