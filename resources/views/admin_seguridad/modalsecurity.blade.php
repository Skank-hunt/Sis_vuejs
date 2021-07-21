<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div id="postform">

                <form enctype="multipart/form-data" id="post" method="post" action="">
                    <div class="modal-body" id="contenido">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h2 id="titulos"></h2>
                                <label for="inputState">Rij</label>
                                <input type="file" required id="rij" name="rij"  class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Rim</label>
                                <input type="file" required id="rim" name="rim"  class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Supervición</label>
                                <input type="file" required id="supervicion" name="supervicion"  class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputState">Foto</label>
                                <input type="file" required id="foto" name="foto"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="actionbuton" class="btn btn-primary">Subir archivos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>