<div class="modal fade" id="modalmunicipios" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Municipios</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputState">Municipio</label>
                    <input type="text" id="nom_municipio" name="nom_municipio" v-model="nom_municipio" class="form-control" 
                    required="true">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputState">Representante</label>
                    <input type="text" id="representante" name="representante" v-model="representante" class="form-control" 
                    required="true">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputState">Cargo del Representante</label>
                    <input type="text" id="cargo" name="cargo" v-model="cargo" class="form-control" required="true">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"  @click="Guardar()">Agregar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>