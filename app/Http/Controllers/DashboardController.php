<?php

namespace App\Http\Controllers;

use App\User;
use App\Room;
use App\RoomType;
use App\Customer;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('dashboard', compact('user'));
    }
}
