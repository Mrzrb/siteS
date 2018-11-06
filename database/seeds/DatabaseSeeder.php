<?php

use Illuminate\Database\Seeder;
use App\Models\News\News;
use App\Models\Prod\Prod;
use App\Models\Category\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NewsTableSeeder::class);
        $this->call(ProdTableSeeder::class);
    }
}

class NewsTableSeeder extends Seeder{
    public function run()
    {
        DB::table('news')->delete();
        $i = 0;
        $cateNum = Category::count();
        while($i < 50){
            News::create(
                [
                    'title' => str_random(10),
                    'category_id' => rand(0, $cateNum),
                    'content' => str_random(125),
                    'author' => str_random(20),   
                ]
            );
            $i++;
        }
    }
}


class ProdTableSeeder extends Seeder{
    public function run()
    {
        DB::table('prods')->delete();
        $i = 0;
        $cateNum = Category::count();
        while($i < 50){
            Prod::create(
                [
                    'name' => str_random(10),
                    'price' => rand(0, 30),
                    'category_id' => rand(0, $cateNum),
                    'detail' => str_random(125),
                ]
            );
            $i++;
        }
    }
}
