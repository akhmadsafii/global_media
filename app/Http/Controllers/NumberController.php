<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function index()
    {
        return view('numbers.v_missing');
    }

    public function findMissingNumbers(Request $request)
    {
        $number = $request->input('numbers');
        // dd($number);

        if (!is_numeric($number) || $number < 0 || $number > 99) {
            return redirect('/')->with('error', 'Nomor harus berupa angka antara 0 hingga 99.');
        }

        $isEven = $this->isEven($number);
        $isOdd = $this->isOdd($number);

        return view('numbers.result', compact('number', 'isEven', 'isOdd'));
    }

    private function isEven($number)
    {
        return $number % 2 == 0;
    }

    private function isOdd($number)
    {
        return $number % 2 != 0;
    }
}
