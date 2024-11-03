<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Display the admin dashboard with a list of all arts
    public function dashboard()
    {
        // Fetch all arts from the database
        $arts = Art::all();

        // Pass arts data to the dashboard view
        return view('dashboard', compact('arts'));
    }

    // Method to delete an art entry
    public function deleteArt($id)
    {
        $art = Art::findOrFail($id);
        $art->delete();

        return redirect()->route('admin.dashboard')->with('status', 'Art deleted successfully');
    }
}
