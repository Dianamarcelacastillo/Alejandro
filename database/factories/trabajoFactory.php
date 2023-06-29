<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class trabajoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = trabajo::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->randomNumber(),
            'existencias'=>$this->faker->randomNumber(),
            'proveedor'=>$this->faker->randomElement(['Amway','johnson y johnson ','Colgate Palmolive']),
        
        ];
    }
}
