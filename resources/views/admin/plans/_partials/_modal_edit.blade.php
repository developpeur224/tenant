<div class="modal fade" role="dialog" id="edit-plan">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Modifier le plan d'abonnement</h5>
                <form action="{{ route('admin.plans.update', ['plan'=>'PLAN_ID']) }}" method="post" id="edit-plan-form">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit-plan-id" name="id">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-nom">Nom du plan</label>
                                <input type="text" class="form-control" id="edit-nom" name="nom" 
                                       placeholder="Ex: Starter, Pro, Business..." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-prix">Prix (GNF)</label>
                                <input type="number" class="form-control" id="edit-prix" name="prix" 
                                       placeholder="Ex: 100000" min="0" step="1000" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-duree">Durée (jours)</label>
                                <input type="number" class="form-control" id="edit-duree" name="duree" 
                                       placeholder="Ex: 30" min="1" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-nb_locataires_max">Nombre maximum de locataires</label>
                                <input type="number" class="form-control" id="edit-nb_locataires_max" name="nb_locataires_max" 
                                       placeholder="Ex: 10" min="1" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-nb_logements_max">Nombre maximum de logements</label>
                                <input type="number" class="form-control" id="edit-nb_logements_max" name="nb_logements_max" 
                                       placeholder="Ex: 5" min="1" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-recommended">Plan recommandé</label>
                                <select class="form-select" id="edit-recommended" name="recommended">
                                    <option value="0">Non</option>
                                    <option value="1">Oui</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Fonctionnalités</label>
                                <div id="edit-features-container">
                                    <!-- Les fonctionnalités seront chargées dynamiquement -->
                                </div>
                                <button type="button" class="btn btn-sm btn-secondary mt-2" id="edit-add-feature">
                                    <em class="icon ni ni-plus"></em> Ajouter une fonctionnalité
                                </button>
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