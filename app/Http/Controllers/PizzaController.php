<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //index
    public function index(){
        $pizzas = Pizza::all() ;

        return view('pizzas.index', [
            'pizzas'=>$pizzas
        ]);
    } 

    public function show($id){
        // use the $id variable to query the db for a record
        $pizza = Pizza::find($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){

        return view('pizzas.create');
    }
}
