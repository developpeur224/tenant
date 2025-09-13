<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenantRequest;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tenants.index', [
            'tenants' => Tenant::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TenantRequest $request)
{
    $data = $request->validated();
    Tenant::create($data);

    return to_route('admin.tenants.index')
        ->with('success', 'Tenant créé avec succès.');
}



    /**
     * Update the specified resource in storage.
     */
    public function update(TenantRequest $request, Tenant $tenant)
    {
       $tenant->update($request->validated());

    return redirect()->route('admin.tenants.index')->with('success', 'Tenant mis à jour avec succès.');
    }

    public function toggleStatus(Tenant $tenant, string $status)
    {
        $tenant->statut = $status;
        $tenant->save();
        if ($status == 'actif') {
            $status = 'activé';
        }

        return redirect()->back()->with('success', 'Le Tenant a été '. $status .' avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
