<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Enums\UserRole;
use App\Models\Booking;
use App\Models\Transaction;
use App\Models\TravelBuddy;
use App\Enums\BookingStatus;
use Illuminate\Http\Request;
use App\Enums\TransactionStatus;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == UserRole::ADMIN->value) {
            $bookings = Booking::latest()->get();
            return view("admin.booking", compact("bookings"));
        } else {
            $bookings = Booking::latest()->where("user_id", Auth::id())->get();
            $bookings->load('tour');
            return view("client.booking", compact("bookings"));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $tour = Tour::find($request->input('tour_id'));
        if (!$tour) {
            return redirect('/client/booking')->withErrors('Tour not found!');
        }
        $calculatedAmount = $tour->price * $request->input('seat');
        Transaction::create([
            "amount" => $calculatedAmount,
            "phone" => $request->input('phone'),
            "ref" => "XXX",
            "status" => TransactionStatus::PENDING->value,
        ]);
        $book = Booking::create([
            'seat' => $request->input('seat'),
            'payed_amount' => $calculatedAmount,
            'user_id' => Auth::id(),
            'tour_id' => $tour->id,
            'transaction_ref' => 'XXX',
            'status' => BookingStatus::PENDING->value,
        ]);

        // Save the invited people (travel buddies)
        if($request->input('seat') > 1){
            $people = [];
            $genders = $request->input('gender'); // Retrieve gender array

            for ($i = 0; $i < $request->input('seat'); $i++) {
                $genderKey = "gender-" . ($i + 1) ; // Construct gender input key dynamically
            
                $people[] = [
                    "name" => $request->input('name')[$i],
                    "id_no" => $request->input('id_no')[$i],
                    "gender" => $request->input($genderKey),
                ];
            }

            
            foreach ($people as $person) {
                TravelBuddy::create([
                    'name' => $person['name'],
                    'id_number' => $person['id_no'],
                    'gender' => $person['gender'],
                    'booking_id' => $book->id, // Fix: changed to correct column name
                ]);
            }
        }
        
        return redirect('/paystack/pay')->with('success', 'Booking created successfully! please make payment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tours = Tour::latest()->get();
        return view('client.book', compact('id', 'tours'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
