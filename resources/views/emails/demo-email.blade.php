<div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; padding: 20px;">

    <h1 style="color: #4CAF50; text-align: center;">Order Details</h1>

    <h2 style="color: #2196F3;">Products</h2>
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($products as $product)
            <li style="margin-bottom: 10px; border-bottom: 1px solid #ddd; padding-bottom: 5px;">
                <strong>{{ $product['name'] }}</strong> - 
                Quantity: {{ $product['quantity'] }} - 
                Price: ${{ $product['price'] }}
            </li>
        @endforeach
    </ul>

    <h2 style="color: #2196F3;">Order Summary</h2>
    <p><strong>Total Amount:</strong> ${{ $totalAmount }}</p>
    <p><strong>Discount Applied:</strong> ${{ $discount }}</p>

    <h2 style="color: #2196F3;">Shipping Details</h2>
    <p><strong>Address:</strong> {{ $shippingAddress }}</p>
    <p><strong>Expected Delivery Time:</strong> {{ $deliveryTime }}</p>

    <h2 style="color: #2196F3;">Order Status</h2>
    <p><strong>{{ $orderStatus }}</strong></p>

    <p style="text-align: center; margin-top: 20px; font-size: 14px; color: #555;">
        Thank you for using our application!
    </p>

</div>