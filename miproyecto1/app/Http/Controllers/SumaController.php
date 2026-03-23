<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SumaController extends Controller
{
    public function show()
    {
        return view('suma');
    }

    public function calcular(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 + $num2;

        return view('suma', ['resultado' => $resultado]);
    }
}