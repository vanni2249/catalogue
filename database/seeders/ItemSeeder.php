<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory(120)->create()->each(function ($item) {
            for ($i = 0; $i < rand(1, 3); $i++) {
                $category = Category::find(rand(1, 3));
                $item->categories()->attach($category->id);
            }

            $rand = rand(1, 4);

            if ($rand == 1) {
                $item->attributes()->attach(1);
                $item->options()->createMany([
                    [
                        'attribute_id' => 1,
                        'label' => 'red',
                        'value' => '#f00'
                    ],
                    [
                        'attribute_id' => 1,
                        'label' => 'blue',
                        'value' => '#0000ff'
                    ]
                ]);
            } elseif ($rand == 2) {
                $item->attributes()->attach(2);
                $item->options()->createMany([
                    [
                        'attribute_id' => 2,
                        'label' => 'x-small',
                        'value' => 'xs'
                    ],
                    [
                        'attribute_id' => 2,
                        'label' => 'small',
                        'value' => 'sm'
                    ]
                ]);
            } elseif ($rand == 3) {
                $item->attributes()->attach(1);
                $item->options()->createMany([
                    [
                        'attribute_id' => 1,
                        'label' => 'red',
                        'value' => '#f00'
                    ],
                    [
                        'attribute_id' => 1,
                        'label' => 'blue',
                        'value' => '#0000ff'
                    ]
                ]);
                $item->attributes()->attach(2);
                $item->options()->createMany([
                    [
                        'attribute_id' => 2,
                        'label' => 'x-small',
                        'value' => 'xs'
                    ],
                    [
                        'attribute_id' => 2,
                        'label' => 'small',
                        'value' => 'sm'
                    ]
                ]);
            }
        });
    }
}
