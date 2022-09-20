<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalculoDeCombustivel;
use App\Models\CalculoDeCombustivel as ModelsCalculoDeCombustivel;

class CombustivelController extends Controller
{
    public function index(){
        return view('consumo');
    }

    public function gasto(){
        $CalculoDeCombustivel = new ModelsCalculoDeCombustivel();
        $valor = $CalculoDeCombustivel->calcular();
        
        return view('resultado', ['valor'=>$valor]);
    }
}
