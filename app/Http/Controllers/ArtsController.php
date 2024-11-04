<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ArtsController extends Controller
{
    public function index(Request $request)
    {


        // Input valideren om ongewenste karakters te weren (XSS-preventie)
        $request->validate([
            'search' => 'string|nullable|max:255',
            'category_id' => 'integer|nullable|exists:categories,id',
        ]);

        // Zoekopdracht en categorie filteren
        $query = Art::query();

        if ($search = $request->input('search')) {
            $query->where('title', 'like', '%' . e($search) . '%'); // XSS-escape
        }

        if ($categoryId = $request->input('category_id')) {
            $query->where('category_id', $categoryId);
        }

        $arts = $query->get();

        return view('art.index', compact('arts'));
    }

    public function show($id)
    {
        $art = Art::findOrFail($id);

        // Toegangscontrole loggen voor monitoring (Insufficient Logging and Monitoring)
        if (Auth::guest()) {
            Log::warning('Ongeautoriseerde toegang tot kunstwerk ID ' . $id);
        }

        return view('arts.show', compact('art'));
    }
}
