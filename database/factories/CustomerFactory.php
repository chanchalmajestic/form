<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all()->pluck('id')->toarray();
        return [
            'name' =>$this->faker->name(),
            'state' =>$this->faker->state(),
            'country' =>$this->faker->country(),
            'email' => fake()->email(),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber,
            'user_id'=>$this->faker->randomelement($users),
        ];
    }
}
