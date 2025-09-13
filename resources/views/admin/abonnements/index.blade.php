@extends('admin.layouts.app')

@section('title', 'Abonnement')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">User
                                    card
                                    Alternet</h4>
                                <p>Cards
                                    are built with as little
                                    markup and styles as
                                    possible, but still
                                    manage to deliver a ton
                                    of control and
                                    customization</p>
                            </div>
                        </div>
                        <div class="row g-3">
    <!-- Carte 1 -->
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
                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Renouveler</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Résilier</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="user-card user-card-s2">
                        <div class="user-avatar lg bg-primary">
                            <span>JD</span>
                            <div class="status dot dot-lg dot-success"></div>
                        </div>
                        <div class="user-info">
                            <h6>Jean Dupont</h6>
                            <span class="sub-text">Abonnement Premium</span>
                        </div>
                    </div>
                    <ul class="team-info">
                        <li><span>Début</span><span>12 Jan 2023</span></li>
                        <li><span>Expiration</span><span>12 Jan 2024</span></li>
                        <li><span>Prix</span><span>99,99 €/an</span></li>
                    </ul>
                    <div class="team-view">
                        <a href="#" class="btn btn-block btn-dim btn-primary">
                            <span>Détails</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte 2 -->
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
                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Renouveler</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Résilier</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="user-card user-card-s2">
                        <div class="user-avatar lg bg-warning">
                            <span>MR</span>
                            <div class="status dot dot-lg dot-warning"></div>
                        </div>
                        <div class="user-info">
                            <h6>Marie Martin</h6>
                            <span class="sub-text">Abonnement Standard</span>
                        </div>
                    </div>
                    <ul class="team-info">
                        <li><span>Début</span><span>05 Mar 2023</span></li>
                        <li><span>Expiration</span><span>05 Mar 2024</span></li>
                        <li><span>Prix</span><span>49,99 €/an</span></li>
                    </ul>
                    <div class="team-view">
                        <a href="#" class="btn btn-block btn-dim btn-primary">
                            <span>Détails</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte 3 -->
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
                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Renouveler</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Résilier</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="user-card user-card-s2">
                        <div class="user-avatar lg bg-pink">
                            <span>PL</span>
                            <div class="status dot dot-lg dot-danger"></div>
                        </div>
                        <div class="user-info">
                            <h6>Pierre Leroy</h6>
                            <span class="sub-text">Abonnement Essentiel</span>
                        </div>
                    </div>
                    <ul class="team-info">
                        <li><span>Début</span><span>18 Juin 2023</span></li>
                        <li><span>Expiration</span><span>18 Déc 2023</span></li>
                        <li><span>Prix</span><span>29,99 €/6mois</span></li>
                    </ul>
                    <div class="team-view">
                        <a href="#" class="btn btn-block btn-dim btn-primary">
                            <span>Détails</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte 4 -->
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
                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Renouveler</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Résilier</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="user-card user-card-s2">
                        <div class="user-avatar lg bg-info">
                            <span>SD</span>
                            <div class="status dot dot-lg dot-info"></div>
                        </div>
                        <div class="user-info">
                            <h6>Sophie Dubois</h6>
                            <span class="sub-text">Abonnement Famille</span>
                        </div>
                    </div>
                    <ul class="team-info">
                        <li><span>Début</span><span>22 Sep 2023</span></li>
                        <li><span>Expiration</span><span>22 Sep 2024</span></li>
                        <li><span>Prix</span><span>149,99 €/an</span></li>
                    </ul>
                    <div class="team-view">
                        <a href="#" class="btn btn-block btn-dim btn-primary">
                            <span>Détails</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carte 5 -->
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
                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Renouveler</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Résilier</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="user-card user-card-s2">
                        <div class="user-avatar lg bg-success">
                            <span>TG</span>
                            <div class="status dot dot-lg dot-success"></div>
                        </div>
                        <div class="user-info">
                            <h6>Thomas Garcia</h6>
                            <span class="sub-text">Abonnement Mensuel</span>
                        </div>
                    </div>
                    <ul class="team-info">
                        <li><span>Début</span><span>03 Nov 2023</span></li>
                        <li><span>Expiration</span><span>03 Déc 2023</span></li>
                        <li><span>Prix</span><span>9,99 €/mois</span></li>
                    </ul>
                    <div class="team-view">
                        <a href="#" class="btn btn-block btn-dim btn-primary">
                            <span>Détails</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection