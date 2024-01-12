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
        $category = new Category;
        $category->name = 'beauty';
        $category->save();

        $category = new Category;
        $category->name = 'barber';
        $category->save();
        
        $category = new Category;
        $category->name = 'pedicure';
        $category->save();

        $category = new Category;
        $category->name = 'otros';
        $category->save();
    }
}
