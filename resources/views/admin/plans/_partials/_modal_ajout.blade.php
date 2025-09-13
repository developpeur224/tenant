<div class="modal fade" role="dialog" id="add-plan">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Ajouter un plan d'abonnement</h5>
                <form method="post" action="{{ route('admin.plans.store') }}" id="add-plan-form">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="nom">Nom du plan</label>
                                <input type="text" class="form-control" id="nom" name="nom" 
                                       placeholder="Ex: Starter, Pro, Business..." 
                                       value="{{ old('nom') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="prix">Prix (GNF)</label>
                                <input type="number" class="form-control" id="prix" name="prix" 
                                       placeholder="Ex: 100000" min="0" step="1000" 
                                       value="{{ old('prix') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="duree">Durée (jours)</label>
                                <input type="number" class="form-control" id="duree" name="duree" 
                                       placeholder="Ex: 30" min="1" 
                                       value="{{ old('duree') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="nb_locataires_max">Nombre maximum de locataires</label>
                                <input type="number" class="form-control" id="nb_locataires_max" name="nb_locataires_max" 
                                       placeholder="Ex: 10" min="1" 
                                       value="{{ old('nb_locataires_max') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="nb_logements_max">Nombre maximum de logements</label>
                                <input type="number" class="form-control" id="nb_logements_max" name="nb_logements_max" 
                                       placeholder="Ex: 5" min="1" 
                                       value="{{ old('nb_logements_max') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="recommended">Plan recommandé</label>
                                <select class="form-select" id="recommended" name="recommended">
                                    <option value="0" {{ old('recommended', 0) == 0 ? 'selected' : '' }}>Non</option>
                                    <option value="1" {{ old('recommended') == 1 ? 'selected' : '' }}>Oui</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Fonctionnalités</label>
                                <div id="features-container">
                                    @php
                                        $oldFeatures = old('features', [['name' => '', 'value' => '']]);
                                    @endphp
                                    @foreach($oldFeatures as $index => $feature)
                                    <div class="feature-item row g-3 mb-3">
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" 
                                                   name="features[{{ $index }}][name]" 
                                                   placeholder="Nom de la fonctionnalité"
                                                   value="{{ $feature['name'] ?? '' }}">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" 
                                                   name="features[{{ $index }}][value]" 
                                                   placeholder="Valeur"
                                                   value="{{ $feature['value'] ?? '' }}">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-icon btn-danger remove-feature" 
                                                    {{ count($oldFeatures) == 1 ? 'disabled' : '' }}>
                                                <em class="icon ni ni-trash"></em>
                                            </button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-sm btn-secondary mt-2" id="add-feature">
                                    <em class="icon ni ni-plus"></em> Ajouter une fonctionnalité
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary">Ajouter le plan</button>
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