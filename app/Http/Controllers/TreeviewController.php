<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class TreeviewController extends Controller
{
    public function index()
    {
        $provinces = Province::with('districts.subdistricts')->get();
        return view('treeview', compact('provinces'));
    }
}
