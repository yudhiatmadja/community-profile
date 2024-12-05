<?php

namespace App\Http\Controllers\Api;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Testimoni::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'testi' => 'required|string',
        ]);

        $testimoni = Testimoni::create($validated);
        return response()->json($testimoni, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimoni = Testimoni::find($id);
        if (!$testimoni) {
            return response()->json(['message' => 'Testimoni not found'], 404);
        }
        return response()->json($testimoni, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimoni = Testimoni::find($id);
        if (!$testimoni) {
            return response()->json(['message' => 'testimoni not found'], 404);
        }

        $testimoni->update($request->all());
        return response()->json($testimoni, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        if (!$testimoni) {
            return response()->json(['message' => 'testimoni not found'], 404);
        }

        $testimoni->delete();
        return response()->json(['message' => 'testimoni deleted'], 200);
    }
}
