<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function chartjs()
    {


        return view('sales.dashboard');
    }
}
