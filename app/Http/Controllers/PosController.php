<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function Index()
    {

        return view('pos.index');
    }
}