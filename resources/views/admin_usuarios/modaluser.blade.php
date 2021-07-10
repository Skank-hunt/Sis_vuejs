<div class="modal fade" id="modaluser" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Usuarios</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Municipio</label>
                            <select name="id" id="id" v-model="id" 
                            class="custom-select custom-select-md"required="true">
                                <option value="null" selected disabled="true">--Seleccione--</option>
                                <option v-bind:value="nomb.id" v-for="nomb in datos_combo">@{{nomb.nombre_municipio}}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputState">Encargado</label>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" id="name" name="name" v-model="name" class="form-control" placeholder="Nombre(s)"
                            required="true">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" id="a_paterno" name="a_paterno" v-model="a_paterno" class="form-control" 
                            placeholder="Apellido Paterno" 
                            required="true">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" id="a_materno" name="a_materno" v-model="a_materno" class="form-control"
                            placeholder="Apellido Materno" required="true">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputState">Correo</label>
                            <input type="email" id="email" name="email" v-model="email" class="form-control" 
                            required="true">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputState">Contraseña</label>
                            <input type="text" id="password" name="password" v-model="password" class="form-control" required="true">
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