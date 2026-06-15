<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the landing page.
     */
    public function index()
    {
        return view('landing.home');
    }

    /**
     * Handle contact form submission.
     */
    public function contact(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // In a real application, you would:
        // 1. Send an email to the admin
        // 2. Save the inquiry to the database
        // 3. Send a confirmation email to the user
        
        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah kami terima. Kami akan menghubungi Anda segera.');
    }
}
