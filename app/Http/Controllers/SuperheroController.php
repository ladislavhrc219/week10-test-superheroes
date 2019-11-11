<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    //
    public function show($superhero_slug)
    {
        $superhero = \App\Superhero::where('slug', $superhero_slug)->first();

        if (!$superhero) {
            abort(404, 'Superhero not found');
        }

       
    }


    public function index () {

        // Question_8:
        // $view = view('superhero/index');
        // return $view;

        // Question_11
        $superhero_name = Superhero::orderBy('name', 'asc')->limit(5)-get();
        // return $superhero_name;
        $view = view('superhero/index');
        $view->superhero = $superhero_name;
        return $view;





    }

}
