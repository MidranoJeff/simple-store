<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function pay(Order $order)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(env('XENDIT_API_KEY') . ':'),
            'Content-Type' => 'application/json',
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => 'order-' . $order->id . '-' . time(),
            'amount' => (float) $order->total_amount,
            'payer_email' => $order->email,
            'description' => 'Order #' . $order->id,
            'success_redirect_url' => route('payment.success', $order),
            'failure_redirect_url' => route('payment.failure', $order),
        ]);

        $data = $response->json();

        if (!isset($data['invoice_url'])) {
            dd($data); // show Xendit error if something goes wrong
        }

        return redirect($data['invoice_url']);
    }

    public function success(Order $order)
    {
        $order->update(['payment_status' => 'paid']);

        return view('payment.success', compact('order'));
    }

    public function failure(Order $order)
    {
        $order->update(['payment_status' => 'failed']);

        return view('payment.failure', compact('order'));
    }
}