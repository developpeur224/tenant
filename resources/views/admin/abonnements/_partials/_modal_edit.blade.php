<!-- Modal de modification d'abonnement -->
<div class="modal fade" role="dialog" id="edit-abonnement">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Modifier l'abonnement</h5>
                <form method="post" id="edit-abonnement-form">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit-abonnement-id" name="id">
                    
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-tenant-id">Locataire</label>
                                <select class="form-select" id="edit-tenant-id" name="tenant_id" required>
                                    <option value="">Sélectionner un locataire</option>
                                    @foreach($tenants as $tenant)
                                        <option value="{{ $tenant->id }}">
                                            {{ $tenant->nom }} - {{ $tenant->email }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-plan-id">Plan d'abonnement</label>
                                <select class="form-select" id="edit-plan-id" name="plan_id" required>
                                    <option value="">Sélectionner un plan</option>
                                    @foreach($plans as $plan)
                                        <option value="{{ $plan->id }}" data-prix="{{ $plan->prix }}" data-duree="{{ $plan->duree }}">
                                            {{ $plan->nom }} - {{ number_format($plan->prix, 0, ',', ' ') }} GNF / {{ $plan->duree }} jours
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="edit-date-debut">Date de début</label>
                                <input type="date" class="form-control" id="edit-date-debut" name="date_debut" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="edit-duree-mois">Durée (mois)</label>
                                <input type="number" class="form-control" id="edit-duree-mois" name="duree_mois" 
                                       min="1" max="36" placeholder="Nombre de mois" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="edit-date-fin">Date de fin</label>
                                <input type="date" class="form-control" id="edit-date-fin" name="date_fin" required readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-mode-paiement">Mode de paiement</label>
                                <select class="form-select" id="edit-mode-paiement" name="mode_paiement">
                                    <option value="">Non payé</option>
                                    <option value="Carte bancaire">Carte bancaire</option>
                                    <option value="Virement">Virement</option>
                                    <option value="Orange Money">Orange Money</option>
                                    <option value="Wave">Wave</option>
                                    <option value="Espèce">Espèce</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-transaction-reference">Référence transaction</label>
                                <input type="text" class="form-control" id="edit-transaction-reference" name="transaction_reference" placeholder="Ex: TRX-123456">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
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