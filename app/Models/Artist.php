<?php

// app/Http/Controllers/ToggleController.php

namespace App\Http\Controllers;

use App\Models\Artist; // Ensure this line is present to import the Artist model
use Illuminate\Http\Request;

class ToggleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Apply authentication middleware
    }

    public function toggleStatus($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->is_alive = !$artist->is_alive; // Toggle the status
        $artist->save();

        return redirect()->back()->with('success', 'Artist status updated successfully.');
    }
}

