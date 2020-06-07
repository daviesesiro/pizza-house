<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //index
    public function index(){
        $pizzas = [
            ['type'=> 'huwaiian', 'base'=> 'sdfsdf'],
            ['type'=> 'volcano', 'base'=> 'jkj'],
            ['type'=> 'some', 'base'=> 'kjlk']
        ];
        return view('pizzas', ['pizzas'=>$pizzas, 'name' => request('name')]);
    }

    public function show($id){
        // use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
