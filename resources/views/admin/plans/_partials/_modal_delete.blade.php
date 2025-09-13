<div class="modal fade" role="dialog" id="delete-confirm-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body modal-body-md text-center">
                <div class="modal-icon">
                    <em class="icon ni ni-trash text-danger" style="font-size: 48px;"></em>
                </div>
                <h5 class="title mt-3">Confirmer la suppression</h5>
                <p class="text-soft">Êtes-vous sûr de vouloir supprimer le plan <strong id="delete-plan-name"></strong> ?</p>
                <p class="text-warning">Cette action est irréversible.</p>
                
                <form id="delete-plan-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="delete-plan-id" name="id">
                    
                    <div class="d-flex justify-content-center ">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger ">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>