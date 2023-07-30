<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\soldado;
use Database\Factories\SoldadoFactory;
use Database\Seeders\SoldadosTableSeeder;

class SoldadoController extends Controller
{
    public function store(Request $request)
    {
        $soldado = new Soldado;
        $soldado->nombre = $request->input('nombre');
        $soldado->edad = $request->input('edad');
        $soldado->save();

        return redirect()->back()->with('success', 'Soldado creado exitosamente.');


    }  

    }





