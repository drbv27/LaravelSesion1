<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Pepito',
            'email' => 'pepito@gmail.com',
            'password' => bcrypt('FullStack Developer'),
            'profesion_id' => 1,
        ]);

    }
}
