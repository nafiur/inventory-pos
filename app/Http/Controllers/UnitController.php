<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function Index()
    {

        return view('backend.unit.index');
    }
}