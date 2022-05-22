<?php

namespace Database\Seeders;

use App\Models\Category;

use App\Models\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Most Picked',
            'slug' => 'Most-Picked'
        ]);
        Category::create([
            'name' => 'Houses with beauty backyard',
            'slug' => 'Houses-with-beauty-backyard'
        ]);
        Category::create([
            'name' => 'Hotels with large living room',
            'slug' => 'Hotels'
        ]);
        Category::create([
            'name' => 'Apartments with kitchen se',
            'slug' => 'Apartments'
        ]);

        Item::create([
            'name' => 'Wodden Pit',
            'category_id' => '1',
            'city' => 'Wonosobo',
            'country' => 'indoneasia'
        ]);
        Item::create([
            'name' => 'Wodden Pit',
            'category_id' => '2',
            'city' => 'Wonosobo',
            'country' => 'indoneasia'
        ]);
        Item::create([
            'name' => 'Wodden Pit',
            'category_id' => '3',
            'city' => 'Wonosobo',
            'country' => 'indoneasia'
        ]);
        Item::create([
            'name' => 'Wodden Pit',
            'category_id' => '4',
            'city' => 'Wonosobo',
            'country' => 'indoneasia'
        ]);
    }
}
