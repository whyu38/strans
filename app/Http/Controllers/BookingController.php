<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'car' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        Booking::create($request->all());

        return redirect()->back()->with('success', 'Pesanan berhasil, tunggu admin menghubungimu.');
    }

    public function index()
    {
        $bookings = Booking::all();
        return view('travelmin.booking', compact('bookings'));
    }
}
