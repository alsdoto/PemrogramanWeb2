<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = (float) $request->input('num1');
        $num2 = (float) $request->input('num2');
        $operator = $request->input('operator');
        $result = null;

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/': 
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    return redirect('calculator')->with('error', 'Angka kedua tidak boleh 0');
                }
                break;
        }
        return view('calculator', ['result' => $result]);   
    }
}
