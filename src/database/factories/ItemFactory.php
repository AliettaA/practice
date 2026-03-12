<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Item::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->value('id'),
            'condition_id' => \App\Models\Condition::inRandomOrder()->first()->id,

            'name' => $this->faker->words(3, true),

            'description' => $this->faker->realText(100),

            'price' => $this->faker->numberBetween(500, 20000),

            'brand' => $this->faker->company(),

            'image' => 'sample.jpg',

            'status' => 'on_sale',
        ];
    }
}
