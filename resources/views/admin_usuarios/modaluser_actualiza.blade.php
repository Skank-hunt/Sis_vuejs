<div class="modal fade" id="modaluser_actualiza" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Editar Información</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                    <input type="text" v-model="informacion_user.valores.id" id="id" name="id" hidden="true">
                    <div class="form-group col-md-12">
                      <label for="inputState">Municipio</label>
                      <input type="text" v-model="informacion_user.valores.nombre_municipio" class="form-control" 
                      disabled="true">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputState">Correo</label>
                      <input type="text" v-model="informacion_user.valores.email" id="email" name="email"
                        class="form-control" disabled="true">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputState">Nueva Contraseña</label>
                      <input type="text" v-model="informacion_user.valores.password" id="password" name="password"
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