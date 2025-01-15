<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $totalOrders = Order::count();
        $totalProducts = Product::count();
        $totalUsers = User::count();
        $recentOrders = Order::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalOrders', 'totalProducts', 'totalUsers', 'recentOrders'));
    }

    public function orders()
    {
        $orders = Order::with('user')->paginate(20);
        return view('admin.orders', compact('orders'));
    }

    public function products()
    {
        $products = Product::with('category')->paginate(20);
        return view('admin.products', compact('products'));
    }

    public function users()
    {
        $users = User::paginate(20);
        return view('admin.users', compact('users'));
    }
}

