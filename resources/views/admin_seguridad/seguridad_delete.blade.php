<div class="modal fade" id="example2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example2ModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="deleteform">
                <div class="modal-body" id="eliminar">
                    <form action="" method="post" id="del">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h2 id="titulos"></h2>
                                <h3 id="Advertencia"></h3>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="action2buton" class="btn btn-primary">Subir archivos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>