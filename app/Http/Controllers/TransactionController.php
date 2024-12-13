<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Order::where('user_id', Auth::user()->id)->get();
        return view('transaction', compact('transactions'));
    }
}
