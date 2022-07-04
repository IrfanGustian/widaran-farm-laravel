<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SapiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_sapi' => $this->faker->sentence(mt_rand(2, 5)),
            'slug' => $this->faker->unique()->slug(3, false),
            'deskripsi' => $this->faker->paragraph(1),
            'nama_sapi' => $this->faker->sentence(mt_rand(2, 5)),
            'harga' => mt_rand(20000000, 50000000),
            'img' => 'sapi-images/cow'. mt_rand(1,3) . '.png'
        ];
    }
}
