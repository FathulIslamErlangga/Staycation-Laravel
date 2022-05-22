<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
    }
}
