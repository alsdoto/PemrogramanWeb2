<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function index()
    {
        return view('temperature');
    }

    public function calculate(Request $request)
    {
        $temperature = $request->input('temperature');
        $fromUnit = $request->input('from_unit');
        $toUnit = $request->input('to_unit');
        
         

        $result = 0;

        if ($fromUnit == 'Celsius' && $toUnit == 'Fahrenheit') {
            $result = ($temperature * 9/5) + 32;
        } elseif ($fromUnit == 'Fahrenheit' && $toUnit == 'Celsius') {
            $result = ($temperature - 32) * 5/9;
        } elseif ($fromUnit == 'Celsius' && $toUnit == 'Kelvin') {
            $result = $temperature + 273.15;
        } elseif ($fromUnit == 'Kelvin' && $toUnit == 'Celsius') {
            $result = $temperature - 273.15;
        } elseif ($fromUnit == 'Kelvin' && $toUnit == 'Celsius') {
            $result = $temperature - 273.15;
        } elseif ($fromUnit == 'Fahrenheit' && $toUnit == 'Kelvin') {
            $result = ($temperature - 32) * 5/9 + 273.15;
        } elseif ($fromUnit == 'Kelvin' && $toUnit == 'Fahrenheit') {
            $result = ($temperature - 273.15) * 9/5 + 32;
        } else {
            $result = $temperature;
        }


        $symbols = [
            'Celsius' => '°C',
            'Fahrenheit' => '°F',
            'Kelvin' => 'K',
        ];

        $toUnitSymbol = $symbols[$toUnit];

        return view('temperature', compact('result','toUnitSymbol'));   
    }
}
