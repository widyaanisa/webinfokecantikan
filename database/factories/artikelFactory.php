<?php

namespace Database\Factories;

use App\Models\artikel;
use Illuminate\Database\Eloquent\Factories\Factory;

class artikelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = artikel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'judul' => $this->faker->title,
                'deskripsi' => $this->faker->desc
        ];
    }
}
