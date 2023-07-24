<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagramController extends Controller
{
    public function index()
    {
        function generatePattern($num)
        {
            $rows = 2 * $num - 1;

            for ($i = 1; $i <= $rows; $i++) {
                $midRow = ceil($rows / 2);
                $distance = abs($midRow - $i);

                for ($j = 1; $j <= $rows; $j++) {
                    if ($j >= $distance + 1 && $j <= $rows - $distance) {
                        echo ($j % 2 == 0) ? "O " : "X ";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        }

        // Ganti angka berikut sesuai dengan input Anda
        $input = 5;
        generatePattern($input);
    }
}
