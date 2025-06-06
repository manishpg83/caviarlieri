<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Addbillingaddress extends Component
{
    public $customerId;
    public $billing_fname;
    public $billing_lname;
    public $billing_company_name;
    public $billing_address;
    public $billing_address_2;
    public $billing_city;
    public $billing_state;
    public $billing_country;
    public $billing_postal_code;
    public $billing_phone;
    public $billing_email;
    public $countries = [];

    public function mount($id = null)
    {
        $this->countries = DB::table('country')->orderBy('name')->get();

        if ($id) {
            $customer = DB::table('customers')
                ->where('id', $id)
                ->where('user_id', Auth::id())
                ->first();

            if ($customer) {
                $this->customerId = $customer->id;
                $this->billing_fname = $customer->billing_fname;
                $this->billing_lname = $customer->billing_lname;
                $this->billing_company_name = $customer->billing_company_name;
                $this->billing_address = $customer->billing_address;
                $this->billing_address_2 = $customer->billing_address_2;
                $this->billing_city = $customer->billing_city;
                $this->billing_state = $customer->billing_state;
                $this->billing_country = DB::table('country')
                    ->where('name', $customer->billing_country)
                    ->value('id');
                $this->billing_postal_code = $customer->billing_postal_code;
                $this->billing_phone = $customer->billing_phone;
                $this->billing_email = $customer->billing_email;
            } else {
                return redirect()->route('billingaddress')->with('error', 'Address not found.');
            }
        }
    }

    public function saveAddress()
    {
        try {
            $validatedData = $this->validate([
                'billing_fname' => 'required|string|max:255',
                'billing_lname' => 'required|string|max:255',
                'billing_address' => 'required|string|max:255',
                'billing_address_2' => 'nullable|string|max:255',
                'billing_city' => 'required|string|max:255',
                'billing_state' => 'required|string|max:255',
                'billing_country' => 'required|numeric|exists:country,id',
                'billing_postal_code' => 'required|string|max:10',
                'billing_phone' => 'required|string|max:20',
                'billing_email' => 'required|email|max:255',
            ]);

            $countryName = DB::table('country')->where('id', $this->billing_country)->value('name');

            if (!$countryName) {
                notyf()->error('Invalid country selected.');
                return;
            }

            $data = [
                'user_id' => Auth::id(),
                'billing_fname' => $this->billing_fname,
                'billing_lname' => $this->billing_lname,
                'billing_company_name' => $this->billing_company_name,
                'billing_address' => $this->billing_address,
                'billing_address_2' => $this->billing_address_2,
                'billing_city' => $this->billing_city,
                'billing_state' => $this->billing_state,
                'billing_country' => $countryName,
                'billing_postal_code' => $this->billing_postal_code,
                'billing_phone' => $this->billing_phone,
                'billing_email' => $this->billing_email,
                'updated_by' => Auth::id()
            ];

            if ($this->customerId) {               
                $updated = DB::table('customers')->where('id', $this->customerId)->update($data);

                if ($updated !== false) {                   
                    notyf()->success('Address updated successfully.');
                } else {                   
                    notyf()->error('Failed to update address.');
                }

            } else {                

                $existingCustomer = DB::table('customers')->where('user_id', Auth::id())->first();

                if ($existingCustomer) {                   
                    $updated = DB::table('customers')->where('id', $existingCustomer->id)->update($data);

                    if ($updated !== false) {                       
                        notyf()->success('Address updated successfully.');
                    } else {                        
                        notyf()->error('Failed to update address.');
                    }
                } else {                   

                    $data['created_by'] = Auth::id();
                    $data['customer_type_id'] = 1;
                    $data['payment_term_display'] = 'default';

                    $inserted = DB::table('customers')->insert($data);

                    if ($inserted) {                        
                        notyf()->success('Address added successfully.');
                    } else {                        
                        notyf()->error('Failed to add address.');
                    }
                }
            }

            return redirect()->route('billingaddress');
        } catch (\Exception $e) {
            Log::error('Error in saveAddress(): ' . $e->getMessage());
            notyf()->error('Something went wrong. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.frontend.account.addbillingaddress');
    }
}