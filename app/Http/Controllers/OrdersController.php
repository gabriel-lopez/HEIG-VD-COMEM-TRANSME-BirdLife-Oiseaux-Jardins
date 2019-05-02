<?php

namespace App\Http\Controllers;

use App\Order;

class OrdersController extends Controller
{
    public function index()
    {
        // $orders = Order::all();

        $orders = Order::has('birds')->get();

        return $orders;
    }
}
