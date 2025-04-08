<div class="myBox-right">
    <!-- Order Summary Section -->
    <div class="section-title" style="border-bottom: 1px solid #000;padding-bottom:5px;">ORDER SUMMARY</div>
    <table width="100%" id="itemslist" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            @foreach($products as $product)
            @if(isset($cartItems[$product->product_code]) && $cartItems[$product->product_code]['quantity'] > 0)
            <tr style="color:#0a1f3a;text-transform:uppercase;font-family: 'AdelleSansW01-Regular';">
                <td colspan="2">
                    {{ $product->product_name }}
                </td>
            </tr>
            <tr>
                <td style="padding-left:20px;">
                    ({{ $cartItems[$product->product_code]['quantity'] }} ITEMS)
                </td>
                <td class="price">
                    {{ $product->currency }} {{ number_format($cartItems[$product->product_code]['total'], 2) }}
                </td>
            </tr>
            <tr>
                <td colspan="2"><span class="sparator-order-summary">&nbsp;</span></td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <table style="border-collapse: collapse; width: 100%;">
        <tbody>
            <tr>
                <td style="padding: 8px; text-align: left; border-bottom: 1px solid #000;">
                    Sub Total :
                </td>
                <td align="right" style="padding: 8px; text-align: right; border-bottom: 1px solid #000; font-size:13px;">
                    @if(count($products) > 0)
                        @php $firstProduct = $products->first(); @endphp
                        <input class="noborder paypal-payment filled" disabled type="text" style="text-align:right;" id="subtotal_text" name="subtotal_text" value="{{ $firstProduct->currency }} {{ number_format($subtotal, 2) }}">
                    @else
                        <input class="noborder paypal-payment filled" disabled type="text" style="text-align:right;" id="subtotal_text" name="subtotal_text" value="USD 0.00">
                    @endif
                    <input class="noborder filled" type="hidden" style="text-align:right;" id="subtotal" name="subtotal" value="{{ $subtotal }}">
                    <input class="noborder" type="hidden" style="text-align:right;" id="promocode" name="promocode" value="">
                </td>
            </tr>
            <tr>
                <td style="padding: 8px; text-align: left; border-bottom: 1px solid #000;">
                    Shipping :
                </td>
                <td align="right" style="padding: 8px; text-align: right; border-bottom: 1px solid #000; font-size:13px;">FREE</td>
            </tr>
            <tr>
                <td style="padding: 8px; text-align: left; border-bottom: 1px solid #000;width: 100px">
                    Order Total :
                </td>
                <td align="right" style="padding: 8px; text-align: right; border-bottom: 1px solid #000; font-size:13px;">
                    @if(count($products) > 0)
                        @php $firstProduct = $products->first(); @endphp
                        <input class="noborder paypal-payment filled" disabled style="text-align:right; font-weight:bold;" type="text" id="nettotal_text" name="nettotal_text" value="{{ $firstProduct->currency }} {{ number_format($total, 2) }}">
                    @else
                        <input class="noborder paypal-payment filled" disabled style="text-align:right; font-weight:bold;" type="text" id="nettotal_text" name="nettotal_text" value="USD 0.00">
                    @endif
                    <input class="noborder filled" style="text-align:right; font-weight:bold;" type="hidden" id="nettotal" name="nettotal" value="{{ $total }}">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:12px;">
                    <br>
                    <u>Refund policy:</u><br> All sales are final and non-refundable. Please see our <a target="_blank" href="terms_conditions.html"> terms and conditions.</a>
                    <br><br>
                    <div style="text-align:center;">
                        <span id="siteseal">
                            <!-- SSL seal will go here -->
                        </span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    @unless(request()->routeIs('checkout'))
    <div id="paypalinfo" style="margin-top:10px;">
        <div class="col-lg-12 col-md-12 col-sm-12" align="right">
            <button 
                wire:click="attemptCheckout" 
                class="myButton1 @if($isCartEmpty) disabled @endif" 
                id="submitbutton"
                @if($isCartEmpty) disabled @endif
            >
                CHECKOUT & PAY >
            </button>
        </div>
    </div>
    @endunless

    <style>
        .disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
        .myButton:disabled {
            background-color: #cccccc;
            color: #666666;
        }
    </style>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('alert', ({type, message}) => {
                alert(message);
            });
            
            document.addEventListener('click', (e) => {
                if (e.target.classList.contains('disabled')) {
                    alert('Please add items to your cart before checkout');
                }
            });
        });
    </script>
</div>