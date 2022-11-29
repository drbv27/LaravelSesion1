<?php

namespace App\Http\Controllers;

use App\Models\Profession;

class ProfessionController extends Controller
{
    public function create()
    {
        Profession::create([
            'title' => 'Nuevo desarrollador',
        ]);

        /* Mostramos todos los datos de la tabla */
        $profesiones = Profession::all();
        foreach ($profesiones as $profesion) {
            // echo $profesion->id.' ';
        }

        $profession = Profession::where('title', 'Angular Dev')->first();


    }

    public function showAll(){
        $professions = Profession::all();
        return view('profession.allProfessions')->with('professions', $professions);
    }


}
