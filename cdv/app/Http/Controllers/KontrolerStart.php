<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerStart extends Controller
{
    //metoda start
    public function start()
    {
        return view('layout');
    }

    //metoda kontakt
    public function kontakt()
    {
        return view('ogolny.kontakt');
    }

    //metoda onas
    public function onas()
    {
        $zadania = [
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3',
        ];
        return view('ogolny.onas', ['zadania' => $zadania]);
    }

}
