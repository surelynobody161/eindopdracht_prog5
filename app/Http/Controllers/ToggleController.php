<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class ToggleController extends Controller
{
    // No constructor needed since we're not using middleware

    public function toggleStatus($id)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to perform this action.');
        }

        // Find the artist by ID
        $artist = Artist::findOrFail($id);

        // Toggle the is_alive status
        $artist->is_alive = !$artist->is_alive;
        $artist->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Artist status updated successfully.');
    }
}
