<?php

namespace App\Http\Controllers;

use App\Models\art;
use Illuminate\Http\Request;

class ArtsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Start with an empty query builder for the Art model
        $query = Art::query();

        // Retrieve search and category filter values
        $search = $request->input('search');
        $categoryId = $request->input('category_id');

        // If search term is provided, filter by title and description
        if ($search) {
            $query->where('title', 'like', "%{$search}%");
        }

        // If category filter is provided, filter by category_id
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        // Fetch the filtered results
        $arts = $query->get();

        // Pass results to the view
        return view('art.index', compact('arts'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $art = Art::findOrFail($id);
        return view('arts.show', compact('art'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
