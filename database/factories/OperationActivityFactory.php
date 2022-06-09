<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OperationActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_id'=>$this->faker->numberBetween(1,5),
            'date'=>$this->faker->date(),
            'title'=>$this->faker->text(),
            'description'=>$this->faker->text(),
            'doctor_id'=>$this->faker->numberBetween(1,5),
        ];
    }
}
