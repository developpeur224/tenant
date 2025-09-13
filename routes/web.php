<?php

use App\Http\Controllers\Admin\AbonnementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TenantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Espace Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::resource('tenants', TenantController::class);
    Route::get('tenants/{tenant}/toggle-status/{status}', [TenantController::class, 'toggleStatus'])->name('tenants.toggle.status');
    Route::resource('plans', PlanController::class);
    Route::resource('abonnements', AbonnementController::class);
});

// Espace Tenant
// Route::prefix('tenant')->name('tenant.')->group(function () {
//     Route::get('/dashboard', [TenantDashboardController::class, 'index'])->name('dashboard');
//     Route::resource('proprietaires', TenantProprietaireController::class);
//     Route::resource('locataires', TenantLocataireController::class);
//     Route::resource('logements', TenantLogementController::class);
//     Route::resource('contrats', TenantContratController::class);
//     Route::resource('paiements', TenantPaiementController::class);
//     Route::resource('factures', TenantFactureController::class);
// });
