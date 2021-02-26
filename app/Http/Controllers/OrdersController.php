<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Order::all());
    }
}
