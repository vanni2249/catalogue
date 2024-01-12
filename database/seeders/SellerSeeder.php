<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seller = new Seller;
        $seller->brand = 'GCB Solution LLC';
        $seller->save();

        $seller = new Seller;
        $seller->brand = 'KAC Solution LLC';
        $seller->save();

        $seller = new Seller;
        $seller->brand = 'AFC Solution LLC';
        $seller->save();

        $seller = new Seller;
        $seller->brand = 'AMC Solution LLC';
        $seller->save();
    }
}
