<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(TabbablesSeeder::class);

        // factory(App\Post::class,30)->create();
        // factory(App\Tag::class,5)->create();
        // factory(App\Image::class,30)->create();
        // factory(App\Photo::class,30)->create();
        // factory(App\Video::class,30)->create();

        $type = ['App\Post','App\Video','App\Image'];
        $type2 = ['Post','Video'];
        $num = 30;
        $taggables = DB::table('taggables');


        for ($i=1; $i <= $num ; $i++) { 
            $taggables->insert([
                'tag_id' => rand(1,5),
                'taggable_id'=>rand(1,30),
                'taggable_type'=>$type[2]
            ]);
        }

        
}
