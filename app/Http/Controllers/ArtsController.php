<?php

namespace App\Http\Controllers;

use App\Models\art;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtsController extends Controller
{
    public function index(Request $request)
    {
//        if (!Auth::check() || Auth::user()->role !== 'user') {
//            abort(403, 'Je mag hier niet komen.');
//        }
//
    $query = Art::query();
//        if (Auth::user()->role !== 'user') {
//            abort(403, 'je bent een user je mag hier niet komen.');
//        }

        $search = $request->input('search');
        $categoryId = $request->input('category_id');

        if ($search) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        $arts = $query->get();

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
