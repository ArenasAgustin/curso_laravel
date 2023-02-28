<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('genres')->delete();

        Db::table('genres')->insert(['name' => 'Action']);
        Db::table('genres')->insert(['name' => 'Adventure']);
        Db::table('genres')->insert(['name' => 'Animation']);
        Db::table('genres')->insert(['name' => 'Biography']);
        Db::table('genres')->insert(['name' => 'Comedy']);
        Db::table('genres')->insert(['name' => 'Crime']);
        Db::table('genres')->insert(['name' => 'Documentary']);
        Db::table('genres')->insert(['name' => 'Drama']);
        Db::table('genres')->insert(['name' => 'Family']);
        Db::table('genres')->insert(['name' => 'Fantasy']);
        Db::table('genres')->insert(['name' => 'Film Noir']);
        Db::table('genres')->insert(['name' => 'History']);
        Db::table('genres')->insert(['name' => 'Horror']);
        Db::table('genres')->insert(['name' => 'Music']);
        Db::table('genres')->insert(['name' => 'Musical']);
        Db::table('genres')->insert(['name' => 'Mystery']);
        Db::table('genres')->insert(['name' => 'Romance']);
        Db::table('genres')->insert(['name' => 'Sci-Fi']);
        Db::table('genres')->insert(['name' => 'Short Film']);
        Db::table('genres')->insert(['name' => 'Sport']);
        Db::table('genres')->insert(['name' => 'Superhero']);
        Db::table('genres')->insert(['name' => 'Thriller']);
        Db::table('genres')->insert(['name' => 'War']);
        Db::table('genres')->insert(['name' => 'Western']);
    }
}
