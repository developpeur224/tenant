<!-- Modal de renouvellement d'abonnement -->
<div class="modal fade" role="dialog" id="renew-abonnement-modal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Renouveler l'abonnement</h5>
                <form method="post" id="renew-abonnement-form">
                    @csrf
                    <input type="hidden" id="renew-abonnement-id" name="abonnement_id">
                    
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="renew-duree-mois">Durée du renouvellement (mois)</label>
                                <input type="number" class="form-control" id="renew-duree-mois" name="duree_mois" 
                                       value="1" min="1" max="36" required>
                                <div class="form-note">Durée en mois pour le renouvellement</div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="renew-mode-paiement">Mode de paiement</label>
                                <select class="form-select" id="renew-mode-paiement" name="mode_paiement">
                                    <option value="">Sélectionner un mode de paiement</option>
                                    <option value="Carte bancaire">Carte bancaire</option>
                                    <option value="Virement">Virement</option>
                                    <option value="Orange Money">Orange Money</option>
                                    <option value="Wave">Wave</option>
                                    <option value="Espèce">Espèce</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="renew-reference-paiement">Référence de paiement</label>
                                <input type="text" class="form-control" id="renew-reference-paiement" 
                                       name="reference_paiement" placeholder="Ex: TRX-123456">
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="renew-montant">Montant (GNF)</label>
                                <input type="number" class="form-control" id="renew-montant" name="montant" 
                                       min="0" step="1000" placeholder="Montant payé">
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="renew-notes">Notes</label>
                                <textarea class="form-control" id="renew-notes" name="notes" 
                                          rows="3" placeholder="Notes supplémentaires..."></textarea>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="alert alert-info">
                                <em class="icon ni ni-info"></em>
                                <span id="renew-info-text">Le renouvellement ajoutera la durée spécifiée à l'abonnement actuel.</span>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary">Confirmer le renouvellement</button>
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