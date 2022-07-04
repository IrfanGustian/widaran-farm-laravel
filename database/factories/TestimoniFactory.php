<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'pekerjaan' => $this->faker->sentence(1),
            'deskripsi' => $this->faker->paragraph(1),
            'img' => 'testimoni-images/orang'. mt_rand(1,3) . '.png'
        ];
    }
}


// $table->id();
//             $table->string('nama');
//             $table->string('pekerjaan');
//             $table->text('deskripsi');
//             $table->string('img');
//             $table->timestamps();