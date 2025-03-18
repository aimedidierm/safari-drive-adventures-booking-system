<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaystackPaymentController extends Controller
{

    public function index()
    {
        $travels = Booking::where('user_id', Auth::user()->id)->get();
        return view('paystack.payment', compact('travels'));
    }



    // Initiate Payment
    public function initiatePayment(Request $request)
    {

        $amount = $request->amount * 100; // Paystack uses kobo (cents), so multiply by 100
        $client = new Client();
        $response = $client->post(env('PAYSTACK_PAYMENT_URL') . '/transaction/initialize', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'email' => $request->email,
                'amount' => $amount,
                'callback_url' => route('paystack.callback')
            ]
        ]);

        $result = json_decode($response->getBody());

        session([
            'book_id' => $request->tour,
            'amount' =>$request->amount,
        ]);

        if ($result->status) {
            return redirect($result->data->authorization_url);
        }

        return back()->with('error', 'Payment initiation failed.');
    }

    // Callback after payment
    public function handleCallback(Request $request)
    {
        $reference = $request->query('reference');
        $client = new Client();
        $response = $client->get(env('PAYSTACK_PAYMENT_URL') . '/transaction/verify/' . $reference, [
            'headers' => [
                'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            ]
        ]);

        $result = json_decode($response->getBody());

        $bookings = Booking::where('id', session('book_id'))
                    ->where('user_id', Auth::user()->id)
                    ->first();

        if($bookings){
            $bookings->amount_paid += session()->get('amount');
            $bookings->save();

            if($bookings->payed_amount <= $bookings->amount_paid){
                $bookings->status = "Complete";
                $bookings->save();
            }
        }
        session()->forget('amount');
        session()->forget('book_id');

        if ($result->status) {
            // Handle successful payment (e.g., update database, send email)
            return view('paystack.success', ['data' => $result->data]);
        }

        return view('paystack.error', ['message' => $result->message]);
    }


}
