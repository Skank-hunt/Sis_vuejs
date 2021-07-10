<div class="modal fade" id="modalactualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Editar Municipio</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                    <input type="text" v-model="informacion.valores.id_municipios" id="id_municipios" name="id_municipios" hidden="true">
                    <div class="form-group col-md-12">
                      <label for="inputState">Municipio</label>
                      <input type="text" v-model="informacion.valores.nom_municipio" id="nom_municipio" name="nom_municipio"
                        class="form-control" required="true">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputState">Representante</label>
                      <input type="text" v-model="informacion.valores.representante" id="representante" name="representante"
                        class="form-control" required="true">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputState">Cargo</label>
                      <input type="text" v-model="informacion.valores.cargo" id="cargo" name="cargo"
                        class="form-control" required="true">
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"  @click="AceptaActualizar()">Actualizar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>