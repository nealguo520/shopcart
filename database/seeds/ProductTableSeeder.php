<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\product([
            'imagePath' => '123',
            'title' => '舊金山',
            'description' => '美國海灣城市',
            'price' => 123000,
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => '123',
            'title' => '舊金山',
            'description' => '美國海灣城市',
            'price' => 123000,
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => '123',
            'title' => '舊金山',
            'description' => '美國海灣城市',
            'price' => 123000,
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => '123',
            'title' => '舊金山',
            'description' => '美國海灣城市',
            'price' => 123000,
        ]);
        $product->save();
        $product = new \App\product([
            'imagePath' => '123',
            'title' => '舊金山',
            'description' => '美國海灣城市',
            'price' => 123000,
        ]);
        $product->save();
    }

}
