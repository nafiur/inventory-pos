<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $id = Auth::user()->id;

        $user = User::find($id);

        return view('backend.index', compact('user'));
    }

    public function SalesDashboard()
    {

        return view('backend.index_sales');
    }
    public function Products()
    {

        return view('backend.pages.products');
    }




}
