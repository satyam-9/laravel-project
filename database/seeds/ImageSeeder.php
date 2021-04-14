<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            'category_id' => '1',
            'name' => 'hello',
            'description' => 'hello i am description how are you all',
            'price' => '65',
            'image' => 'https://localhost/public/frontend/images/food10.jpg'
        ]);
    }
}
