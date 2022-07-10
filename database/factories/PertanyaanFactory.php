<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PertanyaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pertanyaan' => $this->faker->sentence(mt_rand(2, 5)),
            'jawaban' => $this->faker->paragraph(1)
        ];
    }
}
