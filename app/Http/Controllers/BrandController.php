<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function Index()
    {
        $brands = Brand::all();

        return view('backend.brand.index', compact('brands'));
    }
}