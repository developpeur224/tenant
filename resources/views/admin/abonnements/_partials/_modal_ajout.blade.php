<!-- Modal d'ajout d'abonnement -->
<div class="modal fade" role="dialog" id="add-abonnement">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Nouvel abonnement</h5>
                <form method="post" action="{{ route('admin.abonnements.store') }}" id="add-abonnement-form">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="tenant_id">Locataire</label>
                                <select class="form-select" id="tenant_id" name="tenant_id" required>
                                    <option value="">Sélectionner un locataire</option>
                                    @foreach($tenants as $tenant)
                                        <option value="{{ $tenant->id }}" {{ old('tenant_id') == $tenant->id ? 'selected' : '' }}>
                                            {{ $tenant->nom }} - {{ $tenant->email }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="plan_id">Plan d'abonnement</label>
                                <select class="form-select" id="plan_id" name="plan_id" required>
                                    <option value="">Sélectionner un plan</option>
                                    @foreach($plans as $plan)
                                        <option value="{{ $plan->id }}" {{ old('plan_id') == $plan->id ? 'selected' : '' }} data-prix="{{ $plan->prix }}" data-duree="{{ $plan->duree }}">
                                            {{ $plan->nom }} - {{ number_format($plan->prix, 0, ',', ' ') }} GNF / {{ $plan->duree }} jours
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="date_debut">Date de début</label>
                                <input type="date" class="form-control" id="date_debut" name="date_debut" 
                                       value="{{ old('date_debut', now()->format('Y-m-d')) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="duree_mois">Durée (mois)</label>
                                <input type="number" class="form-control" id="duree_mois" name="duree_mois" 
                                       value="{{ old('duree_mois', 1) }}" min="1" max="36" 
                                       placeholder="Nombre de mois" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="date_fin">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin" name="date_fin" 
                                       value="{{ old('date_fin') }}" required readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="mode_paiement">Mode de paiement</label>
                                <select class="form-select" id="mode_paiement" name="mode_paiement">
                                    <option value="">Non payé</option>
                                    <option value="Carte bancaire" {{ old('mode_paiement') == 'Carte bancaire' ? 'selected' : '' }}>Carte bancaire</option>
                                    <option value="Virement" {{ old('mode_paiement') == 'Virement' ? 'selected' : '' }}>Virement</option>
                                    <option value="Orange Money" {{ old('mode_paiement') == 'Orange Money' ? 'selected' : '' }}>Orange Money</option>
                                    <option value="Wave" {{ old('mode_paiement') == 'Wave' ? 'selected' : '' }}>Wave</option>
                                    <option value="Espèce" {{ old('mode_paiement') == 'Espèce' ? 'selected' : '' }}>Espèce</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="transaction_reference">Référence transaction</label>
                                <input type="text" class="form-control" id="transaction_reference" name="transaction_reference" 
                                       value="{{ old('transaction_reference') }}" placeholder="Ex: TRX-123456">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary">Créer l'abonnement</button>
                                </li>
                                <li>
                                    <a href="#" data-bs-dismiss="modal" class="link link-light">Annuler</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>