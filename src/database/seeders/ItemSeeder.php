<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->count(50)->create();
        $item = Item::factory()->create();
        $item->categories()->attach(
            \App\Models\Category::inRandomOrder()->first()->id
        );
    }
}
