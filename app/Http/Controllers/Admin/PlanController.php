<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plans.index', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanRequest $request)
    {
        // Les données sont déjà validées par PlanRequest
        $validated = $request->validated();

        Plan::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Plan créé avec succès!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plan = Plan::findOrFail($id);
        return response()->json($plan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanRequest $request, Plan $plan)
{
    $validated = $request->validated();
    
    // Décoder les features si nécessaire
    if (isset($validated['features']) && is_string($validated['features'])) {
        $validated['features'] = json_decode($validated['features'], true);
    }
    
    $plan->update($validated);
    
    return response()->json([
        'success' => true,
        'message' => 'Plan modifié avec succès!'
    ]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
{
    try {
        $plan->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Plan supprimé avec succès!'
        ]);
        
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Erreur lors de la suppression du plan'
        ], 500);
    }
}
}
