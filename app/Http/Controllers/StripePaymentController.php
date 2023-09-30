<?php
    
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($totalPrice)
    {
        return view('stripe',compact('totalPrice'));
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request ,$totalPrice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalPrice * 100,
                "currency" => "GBP",
                "source" => $request->stripeToken,
                "description" => "Thanks For Payment." 
        ]);

    Session::flash('success', 'Payment successful!');

    // Redirect to the order history page
    return redirect()->route('orders');
}
    }

