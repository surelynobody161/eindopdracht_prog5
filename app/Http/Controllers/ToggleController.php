<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class ToggleController extends Controller
{

    public function toggleStatus($id)
    {


        // Find the artist by ID
        $artist = Artist::findOrFail($id);

        // Toggle the is_alive status
        $artist->is_alive = !$artist->is_alive;
        $artist->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Artist status updated successfully.');
    }
}
