<?php

namespace App\Http\Controllers;

use App\Habitat;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return $orders;
    }
}