<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName(),
             'last_name'=>$this->faker->lastName(),
              'gender'=>$this->faker->randomElement([1,2,3]),
               'email'=>$this->faker->unique()->safeEmail(),
                'tel'=>$this->faker->numberBetween(10000,99999),
                'address'=>$this->faker->address(),
                 'building'=>$this->faker->secondaryAddress(),
                  'detail'=>$this->faker->realText(50),
                   'category_id'=>$this->faker->numberBetween(1,3)
        ];
    }
}
