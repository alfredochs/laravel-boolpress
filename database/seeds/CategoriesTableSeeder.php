<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Fummetti','Films','Books','Games','Others'];

        foreach ($categories as $category){
            $newCategory = new Category();
            $newCategory->name= $category;
            $newCategory->save();
        }
    }
}
