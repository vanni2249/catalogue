<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attribute = new Attribute;
        $attribute->name = 'color';
        $attribute->save();

        $attribute = new Attribute;
        $attribute->name = 'size';
        $attribute->save();
        
        $attribute = new Attribute;
        $attribute->name = 'onze';
        $attribute->save();

        $attribute = new Attribute;
        $attribute->name = 'inch';
        $attribute->save();
    }
}
