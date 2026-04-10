<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::withCount('items')
            ->where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        abort_if($order->user_id !== auth()->id(), 403);

        $order->load('items.product');

        return view('orders.show', compact('order'));
    }

    public function invoice(Order $order)
    {
        // Make sure you have a view for the invoice at resources/views/admin/orders/invoice.blade.php
        $pdf = Pdf::loadView('admin.orders.invoice', compact('order'));
        
        // Download the PDF with a filename
        return $pdf->download('invoice-'.$order->id.'.pdf');
    }
}

