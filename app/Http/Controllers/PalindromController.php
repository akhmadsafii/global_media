<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromController extends Controller
{
    public function index()
    {
        return view('palindroms.input');
    }

    public function checkPalindrome(Request $request)
    {
        $input = $request->input('inputString');
        $result = $this->isPalindromeAndASCIIValid($input);

        return view('palindroms.result', compact('result'));
    }

    private function isPalindromeAndASCIIValid($input)
    {
        $input = preg_replace('/[^a-z0-9]/i', '', mb_strtolower($input));

        $isPalindrome = ($input === strrev($input));

        $asciiSum = array_sum(unpack('C*', $input));

        $isASCIIValid = ($asciiSum <= 4000);

        return ($isPalindrome && $isASCIIValid) ? 1 : 0;
    }
}
