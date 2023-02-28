<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'email' => 'a@a.aa',
            'password' => bcrypt('123'),
            'name' => 'Agustin Arenas',
        ]);
    }
}
