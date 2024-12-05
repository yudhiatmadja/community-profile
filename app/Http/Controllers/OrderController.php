<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Mail\OrderConfirmation;

class OrderController extends Controller
{
    // public function order()
    // {
    //     return view('order');
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
            'description' => 'required|string',
            'option' => 'required|string',
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);
        $filePath = $request->file('payment_proof')->store('payment_proofs', 'public');

        $validatedData['payment_proof'] = $filePath;
        Order::create($validatedData);
        return redirect()->back()->with('success', 'Order berhasil.')->with('modal_open', true);

    }
}
