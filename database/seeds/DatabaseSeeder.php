<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->truncateTables([
        //     'professions',
        //     'users',
        // ]);

        // $this->call(ProfessionSeeder::class);
        $this->call(UsersSeeder::class);

    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS= 0 '); //Desactivamos revision de claves foraneas

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1 '); //Desactivamos revision de claves foraneas

    }
}
