<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'user_id' => User::factory()->create()->id,
            'title' => $this->faker->sentence(),
            'tags' => $this->faker->words(3, true),
            'company' =>$this->faker->company(),
            'location'=> $this->faker->city(),
            'email'=> $this->faker->email(),
            'website'=> $this->faker->url(),
           'description'=> $this->faker->paragraph(5),
        ];
    }
}
