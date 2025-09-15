<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbonnementRequest;
use App\Models\Abonnement;
use App\Models\Plan;
use App\Models\Tenant;
use App\Services\AbonnementRenouvellementService;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function __construct(private AbonnementRenouvellementService $renouvellementService){}
    /**
     * Display a listing of the resource.
     */
    // AbonnementController.php
    public function index()
    {
        $abonnements = Abonnement::with(['tenant', 'plan'])
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('tenant_id')
            ->values();

        
        $tenants = Tenant::where('statut', 'actif')->get();
        $plans = Plan::all();
        
        return view('admin.abonnements.index', compact('abonnements', 'tenants', 'plans'));
    }

    public function renew(Request $request, Abonnement $abonnement)
    {
        $request->validate([
            'duree_mois' => 'required|integer|min:1|max:36',
            'mode_paiement' => 'nullable|string|max:255',
            'reference_paiement' => 'nullable|string|max:255',
            'montant' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string'
        ]);

        try {
            $historique = $this->renouvellementService->renouveler($abonnement, $request->all());

            return to_route('admin.abonnements.index')->with('success', 'Abonnement renouvelle avec succés!');

        } catch (\Exception $e) {
            return to_route('admin.abonnements.index')->with('error', 'Erreur lors de rénouvellement de l\'abonnement');
        }
    }

    public function toggleStatus(Abonnement $abonnement, string $status)
    {

        $abonnement->statut = $status;
        $abonnement->save();
        return to_route('admin.abonnements.index')->with('success', 'Status de l\'abonnement est modifié avec succès');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AbonnementRequest $request)
    {
        Abonnement::create($request->validated());
        return to_route('admin.abonnements.index')->with('success', 'Abonnement ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abonnement = Abonnement::with(['tenant', 'plan'])->findOrFail($id);
        return response()->json($abonnement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AbonnementRequest $request, Abonnement $abonnement)
    {
        $abonnement->update($request->validated());
        return to_route('admin.abonnements.index')->with('success', 'Abonnement modifié avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abonnement = Abonnement::findOrFail($id);
        dd($abonnement);
        $abonnement->delete();
        return response()->json(['success' => true]);
    }
}
