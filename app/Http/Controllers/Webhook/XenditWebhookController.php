<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class XenditWebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Xendit sends invoice status here
        $data = $request->all();

        $externalId = $data['external_id'] ?? null;
        $status = $data['status'] ?? null;

        if (!$externalId) {
            return response()->json(['message' => 'No external_id'], 400);
        }

        // Find order
        $order = Order::where('invoice_id', $externalId)->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Update payment status
        if ($status === 'PAID') {
            $order->update([
                'payment_status' => 'paid'
            ]);
        }

        if ($status === 'EXPIRED' || $status === 'FAILED') {
            $order->update([
                'payment_status' => 'failed'
            ]);
        }

        return response()->json(['message' => 'Webhook received']);
    }
}