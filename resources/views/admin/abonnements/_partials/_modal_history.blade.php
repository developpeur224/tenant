 <!-- Modal Historique -->
    <div class="modal fade" role="dialog" id="history-abonnement-{{ $abonnement->id }}">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Historique de l'abonnement</h5>
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">{{ $abonnement->tenant->nom }}</h6>
                            <span class="text-soft">{{ $abonnement->plan->nom }}</span>
                        </div>
                        <div class="card-body">
                            <div class="nk-tb-list nk-tb-ulist">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col"><span class="sub-text">Date</span></div>
                                    <div class="nk-tb-col"><span class="sub-text">Type</span></div>
                                    <div class="nk-tb-col"><span class="sub-text">Détails</span></div>
                                    <div class="nk-tb-col"><span class="sub-text">Montant</span></div>
                                </div>
                                @forelse($abonnement->historiqueRenouvellements as $historique)
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col">{{ $historique->created_at->format('d/m/Y H:i') }}</div>
                                        <div class="nk-tb-col">{{ ucfirst($historique->type) }}</div>
                                        <div class="nk-tb-col" 
                                            data-bs-toggle="tooltip" 
                                            title="{{ $historique->notes }}">
                                            {{ \Illuminate\Support\Str::limit($historique->notes, 20, '...') ?? '-' }}
                                        </div>

                                        <div class="nk-tb-col">{{ number_format($historique->montant, 0, ',', ' ') }} GNF</div>
                                    </div>
                                @empty
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col text-center" colspan="4">
                                            Aucun historique disponible
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 text-end">
                        <a href="#" data-bs-dismiss="modal" class="btn btn-secondary">Fermer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>