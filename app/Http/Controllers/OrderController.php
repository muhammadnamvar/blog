<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
//        $orders = order::all();
//        $orders = order::get();
        $orders = order::
            select('id', 'title', 'amount', 'created_at')
            ->where('user_id', '>=', 1)
            ->orderBy('amount', 'DESC')
            ->get();

        return view('order', compact('orders'));
    }
}
