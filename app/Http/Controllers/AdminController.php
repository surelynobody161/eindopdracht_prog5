<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $arts = Art::all();
        return view('admin.dashboard', compact('arts'));
    }

    public function deleteArt($id)
    {
        $art = Art::findOrFail($id);
        $art->delete();

        return redirect()->route('admin.dashboard')->with('status', 'Art deleted successfully');
    }
}
