@extends('admin.layouts.app')

@section('title', 'Abonnements')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Abonnements</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Gestion des abonnements des locataires</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-abonnement">
                                    <em class="icon ni ni-plus"></em>
                                    <span>Nouvel abonnement</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-3">
                            @foreach($abonnements as $abonnement)
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="team">
                                            <div class="team-options">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#" class="renew-abonnement-btn" data-abonnement-id="{{ $abonnement->id }}" data-abonnement-url="{{ route('admin.abonnements.edit', $abonnement) }}" data-abonnement-url-action="{{ route('admin.abonnements.renew', $abonnement) }}">
                                                                    <em class="icon ni ni-repeat"></em>
                                                                    <span>Renouveler</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit-abonnement" data-abonnement-url="{{ route('admin.abonnements.edit', $abonnement)}}" data-abonnement-url-action="{{ route('admin.abonnements.update', $abonnement)}}">
                                                                    <em class="icon ni ni-edit"></em>
                                                                    <span>Modifier</span>
                                                                </a>
                                                            </li>
                                                            @php
                                                                $status = $abonnement->statut;
                                                            @endphp

                                                            @if ($status == 'actif')
                                                                <li>
                                                                    <a href="{{ route('admin.abonnements.toggle.status', ['abonnement' => $abonnement->id, 'status' => 'suspendu']) }}" >
                                                                        <em class="icon ni ni-pause"></em>
                                                                        <span>Suspendre</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if ($status == 'suspendu')
                                                                <li>
                                                                    <a href="{{ route('admin.abonnements.toggle.status', ['abonnement' => $abonnement->id, 'status' => 'actif']) }}">
                                                                        <em class="icon ni ni-pause"></em>
                                                                        <span>Actif</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                             @if ($status == 'en_attente')
                                                                <li>
                                                                    <a href="{{ route('admin.abonnements.toggle.status', ['abonnement' => $abonnement->id, 'status' => 'actif']) }}">
                                                                        <em class="icon ni ni-pause"></em>
                                                                        <span>Valdé</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            <li>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#history-abonnement-{{ $abonnement->id }}">
                                                                    <em class="icon ni ni-history"></em>
                                                                    <span>Historique</span>
                                                                </a>
                                                            </li>
                                                            {{-- <li>
                                                                <a href="#" class="cancel-abonnement text-danger" data-abonnement-id="{{ $abonnement->id }}" data-tenant-name="{{ $abonnement->tenant->nom }}">
                                                                    <em class="icon ni ni-trash"></em>
                                                                    <span>Résilier</span>
                                                                </a>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-card user-card-s2">
                                                <div class="user-avatar lg bg-primary">
                                                    <span>{{ substr($abonnement->tenant->nom, 0, 2) }}</span>
                                                    <div class="status dot dot-lg dot-{{ $abonnement->statut == 'actif' ? 'success' : ($abonnement->statut == 'expiré' ? 'danger' : ($abonnement->statut == 'suspendu' ? 'warning' : 'secondary')) }}"></div>
                                                </div>
                                                <div class="user-info">
                                                    <h6>{{ $abonnement->tenant->nom }}</h6>
                                                    <span class="sub-text">{{ $abonnement->plan->nom }}</span>
                                                </div>
                                            </div>
                                            <ul class="team-info">
                                                <li><span>Début</span><span>{{ $abonnement->date_debut}}</span></li>
                                                <li><span>Expiration</span><span>{{ $abonnement->date_fin}}</span></li>
                                                <li><span>Prix</span><span>{{ number_format($abonnement->plan->prix, 0, ',', ' ') }} GNF / mois</span></li>
                                                <li><span>Statut</span><span class="badge badge-sm text-white bg-{{ $abonnement->statut == 'actif' ? 'success' : ($abonnement->statut == 'expiré' ? 'danger' : ($abonnement->statut == 'suspendu' ? 'warning' : 'secondary')) }}">{{ ucfirst($abonnement->statut) }}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @include('admin.abonnements._partials._modal_history')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @include('admin.abonnements._partials._modal_ajout')
    @include('admin.abonnements._partials._modal_edit');
    @include('admin.abonnements._partials._modal_renew')
   

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des actions d'abonnement
        document.querySelectorAll('.cancel-abonnement').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const abonnementId = this.getAttribute('data-abonnement-id');
                const tenantName = this.getAttribute('data-tenant-name');
                resiliereAbonnement(abonnementId, tenantName);
            });
        });
        
        function resiliereAbonnement(id, tenantName) {
            if (confirm(`Êtes-vous sûr de vouloir résilier l'abonnement de ${tenantName} ? Cette action est irréversible.`)) {
                fetch(`/admin/abonnements/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        ToastNotification.success('Succès', 'Abonnement résilié avec succès!');
                        location.reload();
                    }
                })
                .catch(error => {
                    ToastNotification.error('Erreur', 'Erreur lors de la résiliation');
                });
            }
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addAbonnementModal = document.getElementById('add-abonnement');
        const dateDebutInput = document.getElementById('date_debut');
        const dureeMoisInput = document.getElementById('duree_mois');
        const dateFinInput = document.getElementById('date_fin');
        
        // Calcul automatique de la date de fin
        function calculerDateFin() {
            const dateDebut = dateDebutInput.value;
            let dureeMois = parseInt(dureeMoisInput.value) || 1; // Par défaut 1 mois si vide
            
            if (dateDebut) {
                const dateDebutObj = new Date(dateDebut);
                
                // Ajouter le nombre de mois
                dateDebutObj.setMonth(dateDebutObj.getMonth() + dureeMois);
                
                // Soustraire 1 jour pour avoir la veille du même jour du mois suivant
                dateDebutObj.setDate(dateDebutObj.getDate() - 1);
                
                const dateFin = dateDebutObj.toISOString().split('T')[0];
                dateFinInput.value = dateFin;
            }
        }
        
        // Événements pour le calcul de la date de fin
        dateDebutInput.addEventListener('change', calculerDateFin);
        dureeMoisInput.addEventListener('input', calculerDateFin);
        dureeMoisInput.addEventListener('change', calculerDateFin);
        
        // Calculer automatiquement au chargement
        calculerDateFin();
        
        // Réinitialiser la durée à 1 si vide
        dureeMoisInput.addEventListener('blur', function() {
            if (!this.value || this.value < 1) {
                this.value = 1;
                calculerDateFin();
            }
        });
        
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const editAbonnementModal = document.getElementById('edit-abonnement');
    const editDateDebutInput = document.getElementById('edit-date-debut');
    const editDureeMoisInput = document.getElementById('edit-duree-mois');
    const editDateFinInput = document.getElementById('edit-date-fin');
    
    // Calcul automatique de la date de fin pour l'édition
    function calculerDateFinEdit() {
        const dateDebut = editDateDebutInput.value;
        let dureeMois = parseInt(editDureeMoisInput.value) || 1;
        
        if (dateDebut) {
            const dateDebutObj = new Date(dateDebut);
            dateDebutObj.setMonth(dateDebutObj.getMonth() + dureeMois);
            dateDebutObj.setDate(dateDebutObj.getDate() - 1);
            
            const dateFin = dateDebutObj.toISOString().split('T')[0];
            editDateFinInput.value = dateFin;
        }
    }
    
    // Événements pour le calcul de la date de fin
    editDateDebutInput.addEventListener('change', calculerDateFinEdit);
    editDureeMoisInput.addEventListener('input', calculerDateFinEdit);
    editDureeMoisInput.addEventListener('change', calculerDateFinEdit);
    
    // Gérer l'ouverture du modal d'édition
    editAbonnementModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const url = button.getAttribute('data-abonnement-url');
        const urlAction = button.getAttribute('data-abonnement-url-action');

        // Charger les données de l'abonnement via AJAX
        fetch(`${url}`, {
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(abonnement => {
            // Remplir le formulaire avec les données
            document.getElementById('edit-abonnement-id').value = abonnement.id;
            document.getElementById('edit-tenant-id').value = abonnement.tenant_id;
            document.getElementById('edit-plan-id').value = abonnement.plan_id;
            document.getElementById('edit-date-debut').value = abonnement.date_debut;
            
            // Calculer la durée en mois à partir des dates
            const dateDebut = new Date(abonnement.date_debut);
            const dateFin = new Date(abonnement.date_fin);
            const diffTime = Math.abs(dateFin - dateDebut);
            const diffMonths = Math.ceil(diffTime / (1000 * 60 * 60 * 24 * 30));
            
            document.getElementById('edit-duree-mois').value = diffMonths;
            document.getElementById('edit-date-fin').value = abonnement.date_fin;
            document.getElementById('edit-mode-paiement').value = abonnement.mode_paiement || '';
            document.getElementById('edit-transaction-reference').value = abonnement.transaction_reference || '';
            
            // Mettre à jour l'action du formulaire
            document.getElementById('edit-abonnement-form').action = urlAction;
            
            // Calculer la date de fin initiale
            calculerDateFinEdit();
        })
        .catch(error => {
            console.error('Error loading abonnement:', error);
            ToastNotification.error('Erreur', 'Impossible de charger les données de l\'abonnement');
        });
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const renewModal = document.getElementById('renew-abonnement-modal');
    let currentAbonnementId = null;
    let currentAbonnementData = null;

    // Gérer l'ouverture du modal de renouvellement
    document.addEventListener('click', function(e) {
        if (e.target.closest('.renew-abonnement-btn')) {
            const button = e.target.closest('.renew-abonnement-btn');
            const url = button.getAttribute('data-abonnement-url');
            const urlAction = button.getAttribute('data-abonnement-url-action')
            currentAbonnementId = button.getAttribute('data-abonnement-id');
            
            // Charger les données de l'abonnement
            fetch(`${url}`, {
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(abonnement => {
                currentAbonnementData = abonnement;
                
                // Remplir le formulaire
                document.getElementById('renew-abonnement-id').value = currentAbonnementId;
                
                // Mettre à jour le texte d'information
                const infoText = `Renouvellement pour ${abonnement.tenant.nom} - ${abonnement.plan.nom}. 
                                Date de fin actuelle: ${new Date(abonnement.date_fin).toLocaleDateString()}`;
                document.getElementById('renew-info-text').textContent = infoText;
                
                // Calculer le montant suggéré
                const prixMensuel = abonnement.plan.prix / (abonnement.plan.duree / 30);
                const montantSuggere = prixMensuel * 1; 
                document.getElementById('renew-montant').value = Math.round(montantSuggere);
                document.getElementById('renew-abonnement-form').action = urlAction;
                // Ouvrir le modal
                const modal = new bootstrap.Modal(renewModal);
                modal.show();
            })
            .catch(error => {
                console.error('Error loading abonnement:', error);
                ToastNotification.error('Erreur', 'Impossible de charger les données de l\'abonnement');
            });
        }
    });

    // Calculer le montant automatiquement quand la durée change
    document.getElementById('renew-duree-mois').addEventListener('input', function() {
        if (currentAbonnementData) {
            const dureeMois = parseInt(this.value) || 1;
            const prixMensuel = currentAbonnementData.plan.prix / (currentAbonnementData.plan.duree / 30);
            const montant = prixMensuel * dureeMois;
            document.getElementById('renew-montant').value = Math.round(montant);
        }
    });

    // Réinitialiser le modal quand il est fermé
    renewModal.addEventListener('hidden.bs.modal', function() {
        document.getElementById('renew-abonnement-form').reset();
        currentAbonnementId = null;
        currentAbonnementData = null;
    });
});
</script>

@endsection