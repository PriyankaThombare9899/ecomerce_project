<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'name'=>'One Plus TV',
            'price'=>'45000',
            'description'=>'A LED tv is Hd',
            'category'=>'TV',
            'gallery'=>'https://img.poorvika.com/cdn-cgi/image/width=1600,height=1600,quality=75/1600_JPG/Tv-Audio/Tv/Oneplus/OnePlus-U1s-Series-Ultra-HD-4K-LED-Smart-Android-TV-55-inch/OnePlus-U1s-Series-Ultra-HD-4K-LED-Smart-Android-TV-55-inch-6.jpg'

         ],
          [
            'name'=>'Refridgrator',
            'price'=>'40000',
            'description'=>'A smart Refridgrator',
            'category'=>'mobile',
            'gallery'=>'https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2022/10/redmi-note-12-serie.jpg?fit=1920%2C1080&quality=60&strip=all&ssl=1'

         ],
         




      ]);
    }
}
