<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
    public function pocetnastr(){
        $naslov = 'Dobrodosli na pocetnu stranu';
        return view('stranice.pocetna')->with('naslovpocstrane', $naslov);
    }

    public function service(){
        $podaci = array('naslovservisa' => 'Nasi servisi', 'nizservisa'=>['Servis 1', 'Servis 2', 'Servis 3', 'Servis 4']);
        return view('stranice.servisi')->with($podaci);
    }
}
