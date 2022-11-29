<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Juan', 'Alejandro', 'Greysy'];
        $actualUser = 'Juan';

        /* Enviar varias variables mediante un arreglo */
        // return view('users', [
        //     'users' => $users,
        //     'actualUser' => $actualUser
        //     ]);

        /* Enviar variable individuales */
        return view('users')
            ->with('users', $users)
            ->with('actualUser', $actualUser);

    }

    public function welcome($id)
    {
        return "Bienvenido usuario $id";
    }
}
