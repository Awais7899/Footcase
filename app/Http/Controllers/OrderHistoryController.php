<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    public function ordersHistory()
    {
        $user = Auth::user();
        // Retrieve orders for the user along with their associated customers
        $orders = Order::with(['customer' => function ($query) use ($user) {
            $query->where('user_id', $user->id);
        }])->get();
        return view('orders', compact('orders'));
    }
}
