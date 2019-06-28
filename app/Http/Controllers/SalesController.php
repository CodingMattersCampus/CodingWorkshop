<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{

    public function create()
    {
        return view('sales.dashboard');
    }

    public function store(Request $request)
    {
        $stock = new Sales([
            'stockName' => $request->get('stockName'),
            'stockPrice' => $request->get('stockPrice'),
            'stockYear' => $request->get('stockYear'),
        ]);
        $stock->save();
        return redirect('sales.dashboard');
    }


    public function chartjs(Request $request)
    {
        $stock = new Sales([
            'stockName' => $request->get('stockName'),
            'stockPrice' => $request->get('stockPrice'),
            'stockYear' => $request->get('stockYear'),
        ]);
        $stock->save();
        return redirect('sales.dashboard');
    }


}
