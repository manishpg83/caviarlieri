<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Order Update {{ $deliveryOrder->id }}</title>
</head>

<body
    style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #222; margin: 0; padding: 20px; background-color: #fff; line-height: 1.6;">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <div class="logo" style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('admin/assets/img/caviarlieri-logo.png') }}" alt="Caviarlieri Logo"
                style="max-height: 60px; width: auto;">
        </div>

        <div class="greeting" style="margin-bottom: 20px; line-height: 1.6;">
            <p>Dear Mr / Ms {{ $deliveryOrder->orderMaster->customer->first_name }},</p>

            @if ($deliveryOrder->status == 'Shipped')
                <p>Your product has been shipped, and the delivery tracking number is enclosed.</p>
            @elseif ($deliveryOrder->status == 'Delivered')
                <p>Your order has been successfully delivered. We hope you enjoy your purchase!</p>
            @elseif ($deliveryOrder->status == 'Cancelled')
                <p>We regret to inform you that your order has been cancelled. Please contact support if you have any
                    questions.</p>
            @endif
        </div>

        <div style="font-size: 14px; margin-bottom: 10px;">
            <strong>Order Date:</strong> {{ $deliveryOrder->created_at->format('F d, Y') }}<br>
            <strong>Order No:</strong> {{ $deliveryOrder->orderMaster->order_id }}<br>
            <strong>Invoice No:</strong> {{ $deliveryOrder->orderInvoice->invoice_number ?? '-' }}<br>
            <strong>Tracking Number:</strong> {{ $deliveryOrder->tracking_number }}<br>
            <strong>Tracking URL:</strong> <a href="{{ $deliveryOrder->tracking_url }}" target="_blank"
                style="color: #222; word-break: break-all;">{{ $deliveryOrder->tracking_url }}</a>
        </div>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
            <thead>
                <tr>
                    <th
                        style="padding: 12px; text-align: left; border-bottom: 1px solid #eee; background-color: #e2e2e2; font-weight: bold; color: #333;">
                        Item Name</th>
                    <th
                        style="padding: 12px; text-align: right; border-bottom: 1px solid #eee; background-color: #e2e2e2; font-weight: bold; color: #333;">
                        Total Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deliveryOrder->details as $detail)
                    <tr>
                        <td style="padding: 12px; text-align: left; border-bottom: 1px solid #eee;">
                            {{ $detail->product->product_name }}
                        </td>
                        <td style="padding: 12px; text-align: right; border-bottom: 1px solid #eee;">
                            {{ $detail->quantity }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer" style="margin-top: 25px; text-align: left; font-size: 0.9em; color: #666;">
            <p>Please be informed that delivery of your package via courier service will take approximately 3 to 5
                working days.</p>
            <p>If you have any queries, please feel free to contact us at
                <a href="mailto:marketing@swisscaviarlieri.com"
                    style="color: #666; word-break: break-all;">marketing@swisscaviarlieri.com</a>.
            </p>
        </div>
        <div class="signature" style="margin-top: 30px; font-family: georgia, serif; width: fit-content;">
            <div style="text-align: left; margin-bottom: 20px;">
                <img src="{{ asset('admin/assets/img/swisscaviarlieri-logo.jpeg') }}" alt="SwissCaviarlieri Logo"
                    style="max-height: 80px; width: auto;">
            </div>

            <div style="text-align: left;">
                Yours sincerely,<br>
                Victoria Keller<br>
                Customer Experience Manager<br>
                Email: <a href="mailto:info@swisscaviarlieri.com" style="color: #666;">info@swisscaviarlieri.com</a><br>
                <a href="https://www.swisscaviarlieri.com" target="_blank"
                    style="color: #666;">www.swisscaviarlieri.com</a>
            </div>
        </div>

        <div style="margin-top: 30px; text-align: center; width: 100%;">
            <img src="{{ asset('frontend/images/email_banner.jpeg') }}" alt="SwissCaviarlieri Banner"
                style="max-width: 100%; width: 100%; height: auto; display: block;">
        </div>
    </div>
</body>

</html>
