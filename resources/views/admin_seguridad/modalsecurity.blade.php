<div class="modal fade" id="modalsecurity" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Evidencia</h5>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" v-model="infoDocs.values.id_seguridad" id="id_seguridad" name="id_seguridad">
                    <div class="form-row">
                        <div class="form-group col-md-5 card">
                            <label for="inputState">Rij</label>
                            <input type="file" name="rij" ref="rij" id="rij" v-on:change="infoDocs.values.rij" class="form-control-file">
                        </div>
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-5 card">
                            <label for="inputState">Rim</label>
                            <input type="file" name="rim" ref="rim" id="rim" v-on:change="infoDocs.values.rim" class="form-control-file">
                        </div>
                        <hr>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5 card">
                            <label for="inputState">Supervisión</label>
                            <input type="file" name="supervicion" ref="supervision" id="supervicion" v-on:change="infoDocs.values.supervicion" class="form-control-file">
                        </div>
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-5 card">
                            <label for="inputState">Foto</label>
                            <input type="file" name="foto" ref="foto" id="foto" v-on:change="infoDocs.values.foto" class="form-control-file">
                        </div>
                        <hr>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary">Agregar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>