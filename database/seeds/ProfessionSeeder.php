<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'title' => 'FullStack Developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'DevOps',
        ]);

        /* Tener cuidado con usar esta forma para ingrear datos a una BD */
        DB::insert('insert into professions (title) value ("React Dev")'); // usando insert de esta manera podmemos exponerno a inyecciones sql

        /* Usar parametro dinamico para protegernos de ataques SQL */
        DB::insert('insert into professions (title) value (?)',
            ['Angular Dev']
        );

        $users = DB::select('SELECT * FROM USERS where id = (?)', [1]);

        $profession = DB::table('professions')
            ->select('id')
            ->where('title', '=', 'FullStack Developer')
            ->first();

    /* Contructor de consultas SQL con metodo dinamico */
        $professions = DB::table('professions')
            ->select('id')
            ->whereTitle()
            ->get();

        // dd($professions); // con esto hago debug de mi aplicacion

    }
}
