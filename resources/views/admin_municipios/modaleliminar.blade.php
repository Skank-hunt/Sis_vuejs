<div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                   <h3>¿Desea eliminar el registro?</h3>
                   <input type="text" v-model="infoNames.values.id" id="id" name="id" hidden="true">
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"  @click="removeData()">Si</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>