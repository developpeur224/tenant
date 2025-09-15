@extends('admin.layouts.app')

@section('title', 'Liste des tenants')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Tenants</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Informations détaillées sur les tenants</p>
                                </div>
                            </div>

                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                        <em class="icon ni ni-menu-alt-r"></em>
                                    </a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#tenant-add">
                                                    <em class="icon ni ni-plus"></em>
                                                    <span>Ajouter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner position-relative card-tools-toggle">
                                    <div class="card-title-group">
                                        <div class="card-tools me-n1">
                                            <ul class="btn-toolbar gx-1">
                                                <li>
                                                    <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                        data-target="search">
                                                        <em class="icon ni ni-search"></em>
                                                    </a>
                                                </li>
                                                <li class="btn-toolbar-sep"></li>
                                                <li>
                                                    <div class="toggle-wrap">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle"
                                                            data-target="cardTools">
                                                            <em class="icon ni ni-menu-right"></em>
                                                        </a>
                                                        <div class="toggle-content" data-content="cardTools">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li class="toggle-close">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle"
                                                                        data-target="cardTools">
                                                                        <em class="icon ni ni-arrow-left"></em>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="card-body">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search"
                                                    data-target="search">
                                                    <em class="icon ni ni-arrow-left"></em>
                                                </a>
                                                <input type="text" class="form-control border-transparent form-focus-none"
                                                    placeholder="Rechercher par nom ou email">
                                                <button class="search-submit btn btn-icon">
                                                    <em class="icon ni ni-search"></em>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Tenant</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="sub-text">Téléphone</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="sub-text">Adresse</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span class="sub-text">Statut</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                        </div>
                                        @foreach ($tenants as $tenant)
                                            <div class="nk-tb-item" data-tenant-id="{{ $tenant->id }}">
                                                <div class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary">
                                                            <span>{{ substr($tenant->nom, 0, 2) }}</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">{{ $tenant->nom }}
                                                                <span
                                                                    class="dot dot-{{ $tenant->statut == 'actif' ? 'success' : ($tenant->statut == 'suspendu' ? 'warning' : 'danger') }} d-md-none ms-1"></span>
                                                            </span>
                                                            <span>{{ $tenant->email }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span>{{ $tenant->telephone }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span>{{ $tenant->adresse }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span
                                                        class="tb-status text-{{ $tenant->statut == 'actif' ? 'success' : ($tenant->statut == 'suspendu' ? 'warning' : 'danger') }}">
                                                        {{ ucfirst($tenant->statut) }}
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger @if ($tenant->statut == 'expiré') text-danger @endif"
                                                                        data-bs-toggle="dropdown" @if ($tenant->statut != 'expiré') title="Expiré" @endif>
                                                                        <em class="icon ni ni-user-alt"></em>
                                                                    </a>
                                                                    @if ($tenant->statut != 'expiré')
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                                @if ($tenant->statut != 'actif')
                                                                                    <li>
                                                                                        <a href="{{ route('admin.tenants.toggle.status', ['tenant' => $tenant->id, 'status' => 'actif']) }}" class="change-status text-success" data-status="actif">
                                                                                            <em class="icon ni ni-check-circle"></em>
                                                                                            <span>Activé</span>
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                                @if ($tenant->statut != 'suspendu')
                                                                                    <li>
                                                                                        <a href="{{ route('admin.tenants.toggle.status', ['tenant' => $tenant->id, 'status' => 'suspendu']) }}" class="change-status text-warning" data-status="suspendu">
                                                                                            <em class="icon ni ni-alert-circle"></em>
                                                                                            <span>Suspendre</span>
                                                                                        </a>
                                                                                    </li>
                                                                                @endif
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-eye"></em>
                                                                                <span>Voir détails</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="edit-tenant-btn" data-bs-toggle="modal" data-bs-target="#edit-tenant">
                                                                                <em class="icon ni ni-edit"></em>
                                                                                <span>Modifier</span>
                                                                            </a>
                                                                        </li>
                                                                        {{-- <li>
                                                                            <a href="#" class="text-danger">
                                                                                <em class="icon ni ni-trash"></em>
                                                                                <span>Supprimer</span>
                                                                            </a>
                                                                        </li> --}}
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                {{-- <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Précédent</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <span class="page-link">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </span>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">6</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">7</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Suivant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <div class="modal fade" role="dialog" id="tenant-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Ajouter un tenant</h5>
                    <form method="post" action="{{ route('admin.tenants.store') }}" id="add-tenant-form">
                        @method('POST')
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nom">Nom complet</label>
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom complet"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Adresse email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Adresse email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="telephone">Numéro de téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone"
                                        placeholder="Numéro de téléphone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="adresse">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" name="adresse"
                                        placeholder="Adresse complète" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-primary">Ajouter le tenant</button>
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

    <!-- Modal de modification -->
<div class="modal fade" role="dialog" id="edit-tenant">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Modifier le tenant</h5>
                <form action="{{ route('admin.tenants.update', ['tenant' => 'TENANT_ID']) }}" method="post" id="edit-tenant-form">
                    @method('PUT')
                    @csrf
                    <input type="hidden" id="edit-tenant-id" name="id">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-nom">Nom complet</label>
                                <input type="text" class="form-control" id="edit-nom" name="nom" placeholder="Nom complet" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-email">Adresse email</label>
                                <input type="email" class="form-control" id="edit-email" name="email" placeholder="Adresse email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-telephone">Numéro de téléphone</label>
                                <input type="tel" class="form-control" id="edit-telephone" name="telephone" placeholder="Numéro de téléphone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-adresse">Adresse</label>
                                <input type="text" class="form-control" id="edit-adresse" name="adresse" placeholder="Adresse complète" required>
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
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gérer l'ouverture du modal d'édition
            const editModal = document.getElementById('edit-tenant');
            
            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Bouton qui a déclenché le modal
                const tenantItem = button.closest('.nk-tb-item');
                const tenantId = tenantItem.getAttribute('data-tenant-id');
                
                // Récupérer les données du tenant (vous pouvez aussi faire une requête AJAX)
                const nom = tenantItem.querySelector('.tb-lead').textContent.trim();
                const email = tenantItem.querySelector('.user-info span:nth-child(2)').textContent.trim();
                const telephone = tenantItem.querySelector('.tb-col-lg span').textContent.trim();
                const adresse = tenantItem.querySelector('.tb-col-xxl span').textContent.trim();
                const statut = tenantItem.querySelector('.tb-status').textContent.trim().toLowerCase();
                
                // Remplir le formulaire
                document.getElementById('edit-tenant-id').value = tenantId;
                document.getElementById('edit-nom').value = nom;
                document.getElementById('edit-email').value = email;
                document.getElementById('edit-telephone').value = telephone;
                document.getElementById('edit-adresse').value = adresse;
                
                // Créer l'action dynamiquement
                const form = document.getElementById('edit-tenant-form');
                const originalAction = form.getAttribute('action');
                const baseUrl = originalAction.substring(0, originalAction.lastIndexOf('/') + 1);
                form.setAttribute('action', baseUrl + tenantId);
            });
            
        });
    </script>
@endsection