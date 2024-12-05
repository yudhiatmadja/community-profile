<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index()
    {
        return response()->json(Domain::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'domain_name' => 'required|string|max:255',
            'description' => 'required|string',
            'original_price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
        ]);

        $domain = Domain::create($validated);
        return response()->json($domain, 201);
    }

    public function show($id)
    {
        $domain = Domain::find($id);
        if (!$domain) {
            return response()->json(['message' => 'Domain not found'], 404);
        }
        return response()->json($domain, 200);
    }

    public function update(Request $request, $id)
    {
        $domain = Domain::find($id);
        if (!$domain) {
            return response()->json(['message' => 'Domain not found'], 404);
        }

        $domain->update($request->all());
        return response()->json($domain, 200);
    }

    public function destroy($id)
    {
        $domain = Domain::find($id);
        if (!$domain) {
            return response()->json(['message' => 'Domain not found'], 404);
        }

        $domain->delete();
        return response()->json(['message' => 'Domain deleted'], 200);
    }
}
