<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate([
            'name' =>  'Samsung',
            'slug'  =>  'samsung',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Iphone',
            'slug'  =>  'iphone',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Oppo',
            'slug'  =>  'oppo',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Vivo',
            'slug'  =>  'vivo',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Galaxy note 9',
            'slug'  =>  'galaxy-note-9',
            'parent_id' => 1,
        ]);
        Category::updateOrCreate([
            'name' =>  'Galaxy note 10',
            'slug'  =>  'galaxy-note-10',
            'parent_id' => 1,
        ]);
        Category::updateOrCreate([
            'name' =>  'Iphone 13 pro max',
            'slug'  =>  'iphone-13-pro-max',
            'parent_id' => 2,
        ]);
    }
}
