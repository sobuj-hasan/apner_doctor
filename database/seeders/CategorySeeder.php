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
        Category::create([
            'name' => 'Anesthesiologists',
        ]);
        Category::create([
            'name' => 'Cardiologists',
        ]);
        Category::create([
            'name' => 'Colon and Rectal Surgeons',
        ]);
        Category::create([
            'name' => 'Critical Care Medicine Specialists',
        ]);
        Category::create([
            'name' => 'Dermatologists',
        ]);
        Category::create([
            'name' => 'Endocrinologists',
        ]);
        Category::create([
            'name' => 'Gastroenterologists',
        ]);
        Category::create([
            'name' => 'Hematologists',
        ]);
        Category::create([
            'name' => 'Internists',
        ]);
    }
}
