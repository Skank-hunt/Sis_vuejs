<div class="modal fade" id="modaleditarluminaria" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Revisar Luminaria</h5>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" v-model="infoLumin.values.coodigo_luminaria"  id="coodigo_luminaria" name="coodigo_luminaria" >
                    <div class="form-row">
                        <h3>Lugar</h3>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nombre_municipio">Municipio</label>
                            <input type="text" v-model="infoLumin.values.nombre_municipio" class="form-control" id="nombre_municipio" name="nombre_municipio">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nombre_colonia">Colonia</label>
                            <input type="text" v-model="infoLumin.values.nombre_colonia" class="form-control" id="nombre_colonia" name="nombre_colonia">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nombre_calle">Calle</label>
                            <input type="text" v-model="infoLumin.values.nombre_calle" class="form-control" id="nombre_calle" name="nombre_calle">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tiempo_uso">Horas de Uso</label>
                            <input type="text" v-model="infoLumin.values.tiempo_uso" class="form-control" id="tiempo_uso" name="tiempo_uso">
                        </div>
                    </div>
                    <div class="form-row">
                        <h3>Tipos</h3>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tipo_carcasa">Carcasa</label>
                            <input type="text" v-model="infoLumin.values.tipo_carcasa" class="form-control" id="tipo_carcasa" name="tipo_carcasa">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipo_poste">Poste</label>
                            <input type="text" v-model="infoLumin.values.tipo_poste" class="form-control" id="tipo_poste" name="tipo_poste">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipo_luminaria">Luminaria</label>
                            <input type="text" v-model="infoLumin.values.tipo_luminaria" class="form-control" id="tipo_luminaria" name="tipo_luminaria">
                        </div>
                    </div>
                    <div class="form-row">
                        <h3>Estados</h3>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="estado_carcasa">Carcasa</label>
                            <input type="text" v-model="infoLumin.values.estado_carcasa" class="form-control" id="estado_carcasa">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="estado_poste">Poste</label>
                            <input type="text" v-model="infoLumin.values.estado_poste" class="form-control" id="estado_poste" name="estado_poste">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="estado_luminaria">Luminaria</label>
                            <input type="text" v-model="infoLumin.values.estado_luminaria" class="form-control" id="estado_luminaria" name="estado_luminaria">
                        </div>
                    </div>
                    <div class="form-row">
                        <h3>Datos Adicionales</h3>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="carga_aceptada">Carga Aceptada</label>
                            <input type="text" v-model="infoLumin.values.carga_aceptada" class="form-control" id="carga_aceptada" name="carga_aceptada">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="numero_lamparas">No. de Lamparas</label>
                            <input type="text" v-model="infoLumin.values.numero_lamparas" class="form-control" id="numero_lamparas" name="numero_lamparas">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="numero_medidor">No. de Medidor</label>
                            <input type="text" v-model="infoLumin.values.numero_medidor" class="form-control" id="numero_medidor" name="numero_medidor">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fotografia">Foto</label>
                            <input type="text" v-model="infoLumin.values.fotografia" class="form-control" id="fotografia" name="fotografia">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fotodos">Foto (Opcional)</label>
                            <input type="text" class="form-control" id="fotodos" name="fotodos">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="text" disabled v-model="infoLumin.values.operador">
                <button type="button" class="btn btn-outline-primary"  @click="Storing()">Agregar</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>