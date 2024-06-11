<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $orders = Order::whereHas('payment', function($query){
            $query->where('payment_status', 'paid');
        })->get();
        $users = User::where('role', 'user')->count();
        return view('admin.index', compact('orders', 'users'));
    }
}
