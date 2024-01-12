<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\AttributeName;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AttributeSeeder::class,
            SellerSeeder::class,
            CategorySeeder::class,
            ItemSeeder::class,
        ]);


        // Item::factory(120)->create()->each(function ($item) {
        //     for ($i = 0; $i < rand(1, 3); $i++) {
        //         $category = Category::find(rand(1, 3));
        //         $item->categories()->attach($category->id);
        //     }

        //     $rand = rand(1, 4);

        //     if ($rand == 1) {
        //         $item->attributes()->create([
        //             'name' => 'color'
        //         ])->options()->createMany([
        //             [
        //                 'label' => 'red',
        //                 'value' => '#f00'
        //             ],
        //             [
        //                 'label' => 'blue',
        //                 'value' => '#0000ff'
        //             ]
        //         ]);
        //     } elseif ($rand == 2) {
        //         $item->attributes()->create([
        //             'name' => 'size'
        //         ])->options()->createMany([
        //             [
        //                 'label' => 'x-small',
        //                 'value' => 'xs'
        //             ],
        //             [
        //                 'label' => 'small',
        //                 'value' => 'sm'
        //             ]
        //         ]);
        //     } elseif ($rand == 3) {
        //         $item->attributes()->create([
        //             'name' => 'color'
        //         ])->options()->createMany([
        //             [
        //                 'label' => 'red',
        //                 'value' => '#f00'
        //             ],
        //             [
        //                 'label' => 'blue',
        //                 'value' => '#0000ff'
        //             ]
        //         ]);
        //         $item->attributes()->create([
        //             'name' => 'size'
        //         ])->options()->createMany([
        //             [
        //                 'label' => 'x-small',
        //                 'value' => 'xs'
        //             ],
        //             [
        //                 'label' => 'small',
        //                 'value' => 'sm'
        //             ]
        //         ]);
        //     }
        // });
        // Item::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
