<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class AutomobiliaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=> Str::random(100),
            'vardas'=>fake()->firstName(),
            'pavarde'=>fake()->lastName(),
            'marke1'=> $v['brand'],
            'modelis1'=> $v['model'],
            'numeris1'=> $this->faker->unique()->bothify('######'),
            'marke2'=>$v['brand'],
            'modelis2'=>$v['model'],
            'numeris2'=>$this->faker->unique()->bothify('######'),
            'marke3'=>$v['brand'],
            'modelis3'=>$v['model'],
            'numeris3'=>$this->faker->unique()->bothify('######'),
        ];
    }
}
