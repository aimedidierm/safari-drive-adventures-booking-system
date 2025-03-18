<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == UserRole::ADMIN->value) {
            $tours = Tour::latest()->get();
            return view("admin.tours", compact("tours"));
        } else {
            $tours = Tour::latest()->get();
            return view("client.tours", compact("tours"));
        }
    }


    /**
     * Display the specified resource.
     */
    public function showMore()
    {
        $tours = Tour::latest()->get();
        return view('tours', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TourRequest $request)
    {
        $tour = new Tour();
        $tour->title = $request->title;
        $tour->description = $request->description;
        $tour->overview = $request->overview;
        $tour->highlights = json_encode($request->highlights);
        $tour->itinerary = json_encode($request->itinerary);
        $tour->additional_information = $request->additional_information;
        $tour->price = $request->price;

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg'
            ]);

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $tour->image = $imageName;
        }

        $tour->save();

        return redirect('/admin/tours')->with('success', 'Tour added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tour = Tour::findOrFail($id);
        $tour->highlights = json_decode($tour->highlights, true);
        $tour->itinerary = json_decode($tour->itinerary, true);
        return view('tour-details', compact('tour'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();
        return redirect('/admin/tours')->with('success', 'Tour deleted successfully!');
    }
}
