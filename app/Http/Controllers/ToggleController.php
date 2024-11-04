<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToggleController extends Controller
{
    public function toggleStatus($id)
    {
        $artistStatus = session("artist_status.$id", true);

        $newStatus = !$artistStatus;

        session(["artist_status.$id" => $newStatus]);

        // Redirect back with a success message
        return redirect()->back()->with('success', $newStatus ? 'Marked as Alive' : 'Marked as Not Alive');
    }
}
