<?php

use Illuminate\Database\Seeder;

class PhotoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['packages'=>'Our Packages', 'periodicals' => 'Special Periodicals',
            'books'=>'Our Textbooks', 'staff'=>'Our Team'];
        foreach ($categories as $key => $category){
           \App\PhotoCategory::create([
               'name' => $key,
               'title' => $category
           ]);
        }
    }
}
