<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Movie 
{
    public $titolo;
    public $descrizione;

    public function __construct($title, $descriction = null){

        $this -> titolo = $title;
        $this -> descrizione = $descriction;

    }

    public function getString(){

        return $this -> titolo . $this -> descrizione;
    }
}


class TestController extends Controller
{
   function home(){

        $movie1 = new Movie('Garfild', ' gatto mangia lasagne');
        $movie2 = new Movie('Madagascar', ' animali in fuga');
        $movie1stng = $movie1 -> getString();
        
       dd($movie1stng);
       

        return view('home');

   }
}
