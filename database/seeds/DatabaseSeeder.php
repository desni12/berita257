<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $news = [];
        for($i = 1; $i <= 15; $i++ ){
            $news[] =[
                'judul' => 'Berita ' . $i,
                'headline' => 'Headline' . $i,
                'isi' => $faker->text(150),
                'penulis' => $faker->name()
            ];
        }
        DB::table('news')->insert($news);
    }
}
