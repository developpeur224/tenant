@extends('admin.layouts.app')

@section('styles')
<style>
.animate__animated {
    animation-duration: 0.5s;
    animation-fill-mode: both;
}

.animate__fadeIn {
    animation-name: fadeIn;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection
@section('title', 'Plans d\'abonnement')

@section('content')
    <div class="nk-content ">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Plans d'abonnement</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Choisissez votre plan d'abonnement et commencez à gérer vos biens immobiliers.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add-plan">
                                    <em class="icon ni ni-plus"></em>
                                    <span>Ajouter un plan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs">
                           @foreach($plans as $plan)
                                <div class="col-md-6 col-xxl-4" id={{ $plan->id }}>
                                    <div class="card card-bordered pricing {{ $plan->recommended ? 'recommend' : '' }}">
                                        @if($plan->recommended)
                                            <span class="pricing-badge badge bg-primary">Recommandé</span>
                                        @endif
                                        <div class="pricing-head">
                                            <div class="pricing-title">
                                                <h4 class="card-title title">{{ $plan->nom }}</h4>
                                                <p class="sub-text">Parfait pour {{ $plan->nb_locataires_max }} locataires</p>
                                            </div>
                                            <div class="card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="h4 fw-500">{{ number_format($plan->prix, 0, ',', ' ') }} GNF</span>
                                                        <span class="sub-text">/ {{ $plan->duree }} jours</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="h4 fw-500">{{ $plan->nb_logements_max }}</span>
                                                        <span class="sub-text">Logements max</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <ul class="pricing-features">
                                                <li><span class="w-50">Locataires maximum</span> - <span class="ms-auto">{{ $plan->nb_locataires_max }}</span></li>
                                                <li><span class="w-50">Logements maximum</span> - <span class="ms-auto">{{ $plan->nb_logements_max }}</span></li>
                                                <li><span class="w-50">Durée</span> - <span class="ms-auto">{{ $plan->duree }} jours</span></li>
                                                <li><span class="w-50">Prix</span> - <span class="ms-auto">{{ number_format($plan->prix, 0, ',', ' ') }} GNF</span></li>
                                                
                                               @if($plan->features && is_array($plan->features))
                                                    @foreach($plan->features as $feature)
                                                        <li><span class="w-50">{{ $feature['name'] }}</span> - <span class="ms-auto">{{ $feature['value'] }}</span></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                            <div class="pricing-action">
                                                <a href="#" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#edit-plan" data-plan-url="{{ route('admin.plans.edit', ['plan' => $plan->id]) }}">
                                                    <em class="icon ni ni-edit"></em>
                                                    Modifier,
                                                </a>
                                                <button type="button" class="btn btn-outline-danger delete-plan-btn" 
                                                        data-plan-id="{{ $plan->id }}" 
                                                        data-plan-url="{{ route('admin.plans.destroy', ['plan' => $plan->id]) }}"
                                                        data-plan-name="{{ $plan->nom }}">
                                                    <em class="icon ni ni-trash"></em>
                                                    Supprimer
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('modal')
<!-- Modal d'ajout de plan -->
@include('admin.plans._partials._modal_ajout')

<!-- Modal de modification de plan -->
@include('admin.plans._partials._modal_edit')

<!-- Modal de confirmation de suppression -->
@include('admin.plans._partials._modal_delete')

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des fonctionnalités dynamiques
        let featureCount = 1;
        
        document.getElementById('add-feature').addEventListener('click', function() {
            const container = document.getElementById('features-container');
            const newFeature = document.createElement('div');
            newFeature.className = 'feature-item row g-3 mb-3';
            newFeature.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control" name="features[${featureCount}][name]" placeholder="Nom de la fonctionnalité">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="features[${featureCount}][value]" placeholder="Valeur">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-icon btn-danger remove-feature">
                        <em class="icon ni ni-trash"></em>
                    </button>
                </div>
            `;
            container.appendChild(newFeature);
            featureCount++;
            
            // Activer les boutons de suppression
            updateRemoveButtons();
        });
        
        function updateRemoveButtons() {
            const removeButtons = document.querySelectorAll('.remove-feature');
            removeButtons.forEach((button, index) => {
                button.disabled = removeButtons.length === 1;
                button.addEventListener('click', function() {
                    if (removeButtons.length > 1) {
                        this.closest('.feature-item').remove();
                        updateRemoveButtons();
                    }
                });
            });
        }
        
        updateRemoveButtons();

        // Gestion de la soumission du formulaire
        document.getElementById('add-plan-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    if (typeof ToastNotification !== 'undefined') {
                        ToastNotification.success('Succès', 'Plan créé avec succès!');
                    }
                    
                    const modal = bootstrap.Modal.getInstance(document.getElementById('add-plan'));
                    modal.hide();
                    
                    // Recharger la page après un délai
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                if (error.errors) {
                    // Afficher les erreurs de validation
                    let errorMessage = 'Veuillez corriger les erreurs suivantes:\n';
                    for (const [field, messages] of Object.entries(error.errors)) {
                        errorMessage += `- ${messages.join(', ')}\n`;
                    }
                    if (typeof ToastNotification !== 'undefined') {
                        ToastNotification.error('Erreur de validation', errorMessage);
                    }
                } else {
                    if (typeof ToastNotification !== 'undefined') {
                        ToastNotification.error('Erreur', error.message || 'Erreur lors de la création du plan');
                    }
                }
            });
        });
        
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editPlanModal = document.getElementById('edit-plan');
        let editFeatureCount = 0;
        
        // Gérer l'ouverture du modal d'édition
        editPlanModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const url = button.getAttribute('data-plan-url');
            
            // Charger les données du plan via AJAX
            fetch(`${url}`, {
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(plan => {
                // Remplir le formulaire avec les données
                document.getElementById('edit-plan-id').value = plan.id;
                document.getElementById('edit-nom').value = plan.nom;
                document.getElementById('edit-prix').value = plan.prix;
                document.getElementById('edit-duree').value = plan.duree;
                document.getElementById('edit-nb_locataires_max').value = plan.nb_locataires_max;
                document.getElementById('edit-nb_logements_max').value = plan.nb_logements_max;
                document.getElementById('edit-recommended').value = plan.recommended ? '1' : '0';
                
                // Charger les fonctionnalités
                const featuresContainer = document.getElementById('edit-features-container');
                featuresContainer.innerHTML = '';
                editFeatureCount = 0;
                
                if (plan.features && plan.features.length > 0) {
                    plan.features.forEach((feature, index) => {
                        addFeatureField(featuresContainer, feature, index);
                        editFeatureCount = index + 1;
                    });
                } else {
                    addFeatureField(featuresContainer, {}, 0);
                    editFeatureCount = 1;
                }
                
                updateRemoveButtons();
                
                // Mettre à jour l'action du formulaire
                const form = document.getElementById('edit-plan-form');
                const originalAction = form.getAttribute('action');
                const baseUrl = originalAction.substring(0, originalAction.lastIndexOf('/') + 1);
                form.setAttribute('action', baseUrl + plan.id);
            })
            .catch(error => {
                console.error('Error loading plan:', error);
                ToastNotification.error('Erreur', 'Impossible de charger les données du plan');
            });
        });
        
        // Fonction pour ajouter un champ de fonctionnalité
        function addFeatureField(container, feature, index) {
            const newFeature = document.createElement('div');
            newFeature.className = 'feature-item row g-3 mb-3';
            newFeature.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control" 
                        name="features[${index}][name]" 
                        placeholder="Nom de la fonctionnalité"
                        value="${feature.name || ''}">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" 
                        name="features[${index}][value]" 
                        placeholder="Valeur"
                        value="${feature.value || ''}">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-icon btn-danger remove-feature">
                        <em class="icon ni ni-trash"></em>
                    </button>
                </div>
            `;
            container.appendChild(newFeature);
        }
        
        // Ajouter une nouvelle fonctionnalité
        document.getElementById('edit-add-feature').addEventListener('click', function() {
            const container = document.getElementById('edit-features-container');
            addFeatureField(container, {}, editFeatureCount);
            editFeatureCount++;
            updateRemoveButtons();
        });
        
        // Mettre à jour les boutons de suppression
        function updateRemoveButtons() {
            const removeButtons = document.querySelectorAll('#edit-features-container .remove-feature');
            removeButtons.forEach((button, index) => {
                button.disabled = removeButtons.length === 1;
                button.addEventListener('click', function() {
                    if (removeButtons.length > 1) {
                        this.closest('.feature-item').remove();
                        updateRemoveButtons();
                    }
                });
            });
        }
        
        // Gestion de la soumission du formulaire
        document.getElementById('edit-plan-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-HTTP-Method-Override': 'PUT',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    ToastNotification.success('Succès', 'Plan modifié avec succès!');
                    
                    const modal = bootstrap.Modal.getInstance(editPlanModal);
                    modal.hide();
                    
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                if (error.errors) {
                    let errorMessage = 'Veuillez corriger les erreurs suivantes:\n';
                    for (const [field, messages] of Object.entries(error.errors)) {
                        errorMessage += `- ${messages.join(', ')}\n`;
                    }
                    ToastNotification.error('Erreur de validation', errorMessage);
                } else {
                    ToastNotification.error('Erreur', error.message || 'Erreur lors de la modification du plan');
                }
            });
        });
        
        // Réinitialiser le modal quand il est fermé
        editPlanModal.addEventListener('hidden.bs.modal', function() {
            document.getElementById('edit-plan-form').reset();
            document.getElementById('edit-features-container').innerHTML = '';
            editFeatureCount = 0;
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteModal = document.getElementById('delete-confirm-modal');
    let planCardToDelete = null;

    // Gérer l'ouverture du modal de suppression
    document.addEventListener('click', function(e) {
        if (e.target.closest('.delete-plan-btn')) {
            const button = e.target.closest('.delete-plan-btn');
            const planId = button.getAttribute('data-plan-id');
            const url = button.getAttribute('data-plan-url');
            const planName = button.getAttribute('data-plan-name');
            planCardToDelete = document.getElementById(planId);
            // Remplir le modal de confirmation
            document.getElementById('delete-plan-name').textContent = planName;
            document.getElementById('delete-plan-id').value = planId;
            document.getElementById('delete-plan-form').action = `${url}`;
            
            // Ouvrir le modal
            const modal = new bootstrap.Modal(deleteModal);
            modal.show();
        }
    });

    // Gestion de la soumission du formulaire de suppression
    document.getElementById('delete-plan-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const planId = document.getElementById('delete-plan-id').value;
        
        fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'X-HTTP-Method-Override': 'DELETE',
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw errorData;
                });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                ToastNotification.success('Succès', 'Plan supprimé avec succès!');
                
                // Animation de suppression
                if (planCardToDelete) {
                    planCardToDelete.style.transition = 'all 0.3s ease';
                    planCardToDelete.style.opacity = '0';
                    planCardToDelete.style.transform = 'scale(0.8)';
                    
                    setTimeout(() => {
                        planCardToDelete.remove();
                        
                        // Réorganiser les cards si nécessaire
                        reorganizePlanCards();
                    }, 300);
                }
                
                const modal = bootstrap.Modal.getInstance(deleteModal);
                modal.hide();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            ToastNotification.error('Erreur', error.message || 'Erreur lors de la suppression du plan');
            
            // Fermer le modal en cas d'erreur
            const modal = bootstrap.Modal.getInstance(deleteModal);
            modal.hide();
        });

        // Fonction pour réorganiser les cards après suppression
        function reorganizePlanCards() {
            const planCards = document.querySelectorAll('.col-md-6.col-xxl-3');
            const plansContainer = document.querySelector('.row.g-gs');
            
            // Réorganiser l'ordre des cards si nécessaire
            planCards.forEach((card, index) => {
                card.classList.remove('animate__animated', 'animate__fadeIn');
                card.classList.add('animate__animated', 'animate__fadeIn');
                card.style.animationDelay = `${index * 0.1}s`;
            });
        }
    });
});
</script>
@endsection