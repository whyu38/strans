<?php

// app/Http/Controllers/ForgotPasswordController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Logika untuk mengirim email reset password

        return redirect()->back()->with('status', 'Email reset password telah dikirim!');
    }
}
