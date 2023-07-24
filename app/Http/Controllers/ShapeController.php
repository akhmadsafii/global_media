<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapeController extends Controller
{
    const PI = 3.14;

    public function index()
    {
        return view('shapes.calculator');
    }

    public function calculate(Request $request)
    {
        // dd($request);
        $radiusCircle = $request->input('radiusCircle');
        $radiusSphere = $request->input('radiusSphere');

        $circleArea = $this->calculateCircleArea($radiusCircle);
        $sphereVolume = $this->calculateSphereVolume($radiusSphere);

        return view('shapes.calculator', compact('circleArea', 'sphereVolume', 'radiusCircle', 'radiusSphere'));
    }

    private function calculateCircleArea($radius)
    {
        return self::PI * $radius * $radius;
    }

    private function calculateSphereVolume($radius)
    {
        return (4 / 3) * self::PI * $radius * $radius * $radius;
    }
}
