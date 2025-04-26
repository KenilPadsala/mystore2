<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Notifications\DemoEmail;
use App\Notifications\FestivalOfferEmail;
use App\Notifications\PurchaseOrderDone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class Test extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        
        $data = [
            'hobbies' => ['Reading', 'Traveling', 'Cooking'],
            'products' => [
                ['name' => 'Product 1', 'quantity' => 2, 'price' => 50],
                ['name' => 'Product 2', 'quantity' => 1, 'price' => 30],
            ],
            'totalAmount' => 130,
            'discount' => 20,
            'shippingAddress' => '123 Main Street, City, Country',
            'deliveryTime' => '3-5 business days',
            'orderStatus' => 'Processing',
        ];

        SendEmail::dispatch($user, $data);
        SendEmail::dispatch($user, $data);
      
    }
}
