<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Mail\CustomerContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class CustomerContact extends Component
{   
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $userMessage;
    public $disableBtn = "";

    public function mount(){
        $this->disableBtn = "";
    }

    public function rules(){
        return [
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:25',
            'userMessage' => 'required|string|max:500',
        ];
    }
    public function sendMail(){

        try {
            $this->disableBtn = "disabled";
            $this->validate();
            
            $name = $this->first_name . " " . $this->last_name;
            Mail::to('info@swisscaviarlieri.com')->send(
                new CustomerContactMail(
                    $this->userMessage, 
                    $name, 
                    $this->email,
                    $this->phone)
            );
            notyf()->success('Your message has been sent successfully.');
            $this->disableBtn = "";

        } catch (ValidationException $e) {
            notyf()->error('Please check your input and try again.');
            $this->disableBtn = "";
            throw $e; // Let Livewire still show field errors
        } catch (\Exception $e) {
            notyf()->error('Failed to send your message. Please try again later.');
            $this->disableBtn = "";
        }
    }
    public function render()
    {
        return view('livewire.frontend.customer-contact');
    }
}
