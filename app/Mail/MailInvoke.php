<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailInvoke extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $address;
    public $email;
    public $phone;

    public $totalPrice;
    public $totalQuantity;
    public $cart;

    /**
     * Create a new message instance.
     *
     * @param  string  $name
     * @param  string  $address
     * @param  string  $email
     * @param  string  $phone
     * @param  float  $totalPrice
     * @param  int  $totalQuantity
     * @param  array  $cart
     * @return void
     */
    public function __construct($name, $address, $email, $phone,$totalPrice, $totalQuantity, $cart)
{
    $this->name = $name;
    $this->address = $address;
    $this->email = $email;
    $this->totalPrice = $totalPrice;
    $this->totalQuantity = $totalQuantity;
    $this->cart = $cart;
    $this->phone = $phone;

}


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Trả về view của email
        return $this->view('emails.invoice')
                    ->subject('Mail Invoke')
                    ->with([    
                        'name' => $this->name,
                        'address' => $this->address,
                        'email' => $this->email,
                        'totalPrice' => $this->totalPrice,
                        'totalQuantity' => $this->totalQuantity,
                        'cart' => $this->cart,
                        'phone' => $this->phone,

                    ]);
    }
}
