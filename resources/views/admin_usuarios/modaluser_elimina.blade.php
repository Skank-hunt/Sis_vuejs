<div class="modal fade" id="modaluser_elimina" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                   <h3>¿Desea eliminar al usuario?</h3>
                   <input type="text" v-model="informacion_user.valores.id" id="id" name="id" hidden="true">
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary"  @click="AceptaEliminar()">Si</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
