<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Sigmalogy Studio',
            'domains' => Domain::all(),
            'orders'  => Order::all()
        ]);
    }
}
