<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming User model is in App\Models namespace

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count(); // Counting all users

        return view('travelmin.dashboard', compact('userCount'));
    }
}
