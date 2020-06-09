<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    //index
    public function index(){
        $pizzas = Pizza::all() ;

        return view('pizzas.index', [
            'pizzas'=>$pizzas
        ]);
    } 

    public function show($id){
        // use the $id variable to query the db for a record
        $pizza = Pizza::findorFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){

        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('message', 'Thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return \redirect('/pizzas');
    }
}
