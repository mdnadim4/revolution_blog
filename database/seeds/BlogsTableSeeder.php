<?php

use Illuminate\Database\Seeder;

use App\Blog;

class BlogsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        Blog::truncate();

        for($i=0; $i<=50; $i++){
            DB::table('blogs')->insert([
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(10),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
