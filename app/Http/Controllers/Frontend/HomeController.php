<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OrderMaster;
use Illuminate\Support\Facades\Auth;
use Log;

class HomeController extends Controller
{
    public function login()
    {  
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function getTotalOrders()
    {
        return OrderMaster::count();
    }

    public function getTotalPendingOrders()
    {
        return OrderMaster::where('status', 'pending')->count();
    }

    public function myAccount()
    {
        $auth = Auth::user();
        $customer = Customer::where('user_id', $auth->id)->first();

        if ($customer) {
            $customerId = $customer->id;

            $totalOrders = OrderMaster::where('customer_id', $customerId)
                            ->where('order_type', 'online')
                            ->count();
                            
            $totalPendingOrders = OrderMaster::where('customer_id', $customerId)
                                ->where('order_status', 'pending')
                                ->where('order_type', 'online')
                                ->count();
        } else {
            $totalOrders = 0;
            $totalPendingOrders = 0;
        }

        return view('frontend.profile.account', compact('customer', 'totalOrders', 'totalPendingOrders'));
    }

    public function myOrders()
    {
        return view('frontend.profile.account-orders');
    }

    public function Orderview($order_id = null)
    {
        return view('frontend.profile.order-view', ['order_id' => $order_id]);
    }

    public function myProfile()
    {
        return view('frontend.profile.account-profile');
    }

    public function billingaddress()
    {
        return view('frontend.profile.account-billing-address');
    }

    public function addbillingaddress($id = null)
    {
        return view('frontend.profile.account-add-billing-address', ['id' => $id]);
    }

    public function shippingaddress()
    {
        return view('frontend.profile.account-shipping-address');
    }

    public function addshippingaddress($addressNumber = null)
    {
        return view('frontend.profile.account-add-shipping-address', ['addressNumber' => $addressNumber]);
    }

    /*    public function addbillingaddress($id = null)
   {
       return view('frontend.profile.add-billing-address', [
           'customerId' => $id
       ]);
   } */

    /*    public function addshippingaddress($addressNumber = null)
   {
       return view('frontend.profile.add-shipping-address', [
           'addressNumber' => $addressNumber
       ]);
   } */
    public function cart()
    {
        return view('frontend.profile.cart');
    }

    public function checkout()
    {
        return view('frontend.profile.checkout');
    }

    //caviliary

    public function swisscellulartherapy()
    {
        return view('frontend.pages.swiss-cellular-therapy');
    }

    public function outstandingbenefits()
    {
        return view('frontend.pages.outstanding-benefits');
    }

    public function clinicalscience()
    {
        return view('frontend.pages.clinical-science');
    }

    public function expertsopinions()
    {
        return view('frontend.pages.experts-opinions');
    }

    public function keyingredients()
    {
        return view('frontend.pages.key-ingredients');
    }

    public function luxuryofcaviar()
    {
        return view('frontend.pages.luxury-of-caviar');
    }

    public function swisscaviarlieribeauty()
    {
        return view('frontend.pages.Swiss-Caviarlieri-Beauty');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
