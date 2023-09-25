<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PayPalClient;



class PayPalController extends Controller
{
    //
    public function payment(Plan $plan)
    {
        $subscription = Subscription::where('user_id', Auth::id())->where('status', 'completed')->latest('expires_at')->first();
        if ($subscription && $subscription->expires_at >= now()) {
            return redirect()->route('dashboard');
        }
        Subscription::where('status', 'pending')->where('user_id', Auth::id())->update([
            'status' => 'cancelled',
        ]);
        $subscription = Subscription::create([
            'plan_id' => $plan->id,
            'user_id' => Auth::id(),
            'status' => 'pending',
            'price' => $plan->price,
        ]);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('payment.success', ['subscription' => $subscription->id]),
                "cancel_url" => route('payment.cancel', ['subscription' => $subscription->id]),
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $plan->price
                    ]
                ]
            ]
        ]);
        // dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('payment.cancel', ['subscription' => $subscription->id]);
        }
    }
    public function increasePayment(Request $request)
    {
        // dd($request->all());
        $plan = Plan::where('id',$request->plan)->first();
        // dd($plan);
        Subscription::where('status', 'pending')->where('user_id', Auth::id())->update([
            'status' => 'cancelled',
        ]);
        $subscription = Subscription::create([
            'plan_id' => $plan->id,
            'user_id' => Auth::id(),
            'status' => 'pending',
            'status' => 'pending',
            'price' => $plan->price,
        ]);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('payment.success', ['subscription' => $subscription->id]),
                "cancel_url" => route('payment.cancel', ['subscription' => $subscription->id]),
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $plan->price
                    ]
                ]
            ]
        ]);
        // dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('payment.cancel', ['subscription' => $subscription->id]);
        }
    }
    public function success(Request $request, Subscription $subscription)
    {
        $subscription1 = Subscription::where('user_id', Auth::id())->where('status', 'completed')->latest('expires_at')->first();
        if ($subscription1 && $subscription1->expires_at >= now()) {
            $time = $subscription1->expires_at;
        } else {
            $time = now();
        }
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        // dd($response);
        if ($response['status'] && $response['status'] == 'COMPLETED') {
            $subscription->update([
                'status' => 'completed',
                'expires_at' => $time->addDays($subscription->plan->days),
            ]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('payment.cancel', ['subscription' => $subscription->id]);
        }
    }
    public function cancel(Subscription $subscription)
    {
        $subscription->update([
            'status' => 'cancelled',
        ]);
        return redirect()->route('home');
    }
}
// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Srmklive\PayPal\Services\ExpressCheckout;


// class PayPalController extends Controller
// {
//     //
//     public function payment()
//     {
//         $data = [];
//         $data['items'] = [
//             [
//                 'name' => 'test', //item name
//                 'price' => 500, //item price
//                 'desc' => 'test', //item description
//                 'qty' => 2, //item quantity
//             ],
//         ];
//         $data['invoice_id'] = 1;
//         $data['invoice_description'] = "test invoice";
//         $data['return_url'] = route('payment.success');
//         $data['cancel_url'] = route('payment.cancel');
//         $data['total'] = 1000;

//         $provider = new ExpressCheckout;
//         $response = $provider->setExpressCheckout($data,true);
//         // dd($response);
//         return redirect($response['paypal_link']);
//     }
//     public function cancel()
//     {
//         // delete from database
//         return response()->json('Payment Cancelled',402);
//     }
//     public function cancel(Request $request)
//     {
//         $provider = new ExpressCheckout;
//         $response = $provider->getExpressCheckoutDetails($request->token);
//         if(in_array(strtoupper($response['ACK']),['SUCCESS','SUCCESSWITHWARNING'])){
//             // aprove payment
//             return response()->json('Paid success');
//         }
//         // delete from database
//         return response()->json('fail payment',402);
//     }
// }
