<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'nullable|string|max:50',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        $inquiry = Inquiry::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Inquiry saved successfully.',
            'data'    => $inquiry,
        ]);
    }
}
