@extends('layouts.app')
@section('content')
    <div class="container" id="ind">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <h5>Luminarias</h5>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form id="search">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control" name="query" v-model="searchQuery" placeholder="Buscar">
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="tableFixHeadLista">
                                <data-table class=" col-12 table table-sm" :data="finder" :columns-to-display="gridColumns" :filter-key="searchQuery" :items-per-page="10" :columns-to-sort="gridColumns">
                                    <template slot="coodigo_luminaria" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.coodigo_luminaria }}</div>
                                    </template>
                                    <template slot="Fecha" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.fecha }}</div>
                                    </template>
                                    <template slot="Hora" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.hora }}</div>
                                    </template>
                                    <template slot="Operador" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.operador }}</div>
                                    </template>
                                    <template slot="Latitud" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.latitud }}</div>
                                    </template>
                                    <template slot="Longitud" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.longitud }}</div>
                                    </template>
                                    <template slot="Nombre del Municipio" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.nombre_municipio }}</div>
                                    </template>
                                    <template slot="Nombre de la Colonia" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.nombre_colonia }}</div>
                                    </template>
                                    <template slot="Nombre de la Calle" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.nombre_calle }}</div>
                                    </template>
                                    <template slot="Tipo de Calle" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.tipo_calle }}</div>
                                    </template>
                                    <template slot="Tipo de Via" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.tipo_via }}</div>
                                    </template>
                                    <template slot="Tipo de Poste" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.tipo_poste }}</div>
                                    </template>
                                    <template slot="Estado de Poste" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.estado_poste }}</div>
                                    </template>
                                    <template slot="Tipo de Luminaria" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.tipo_luminaria }}</div>
                                    </template>
                                    <template slot="Estado de Luminaria" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.estado_luminaria }}</div>
                                    </template>
                                    <template slot="Tipo de Carcasa" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.tipo_carcasa }}</div>
                                    </template>
                                    <template slot="Tiempo de Uso" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.tiempo_uso }}</div>
                                    </template>
                                    <template slot="Numero de Lamparas" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.numero_lamparas }}</div>
                                    </template>
                                    <template slot="Numero de Medidor" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.numero_medidor }}</div>
                                    </template>
                                    <template slot="Carga Aceptada" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.carga_aceptada }}</div>
                                    </template>
                                    <template slot="Observaciones" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.observaciones }}</div>
                                    </template>
                                    <template slot="Fotografia" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.fotografia }}</div>
                                    </template>
                                    <template slot="Conciliada" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.conciliada }}</div>
                                    </template>
                                    <template slot="Id del Usuario" slot-scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.users_id }}</div>
                                    </template>
                                    <template slot="Acciones" slot-scope="u">
                                        <div class="text-center">
                                            <button class="btn btn-outline-primary" data-toogle="tooltip" data-placement="bottom" @click="getDatum(u.entry)" title="Editar Info de la Luminaria"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-success" data-toogle="tooltip" data-placement="bottom" title="Conciliar Luminaria"><i class="far fa-thumbs-up"></i></button>
                                        </div>
                                    </template>
                                </data-table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin_luminaria.modaleditarluminaria')
    </div>

    <script type="text/javascript">
        Vue.use(DataTable);

        new Vue({
           el: "#ind",
            created: function () {
                this.getLuminarias();
            },
            data:{
               searchQuery: '',
                gridColumns: ['coodigo_luminaria','Fecha','Hora','Operador','Latitud','Longitud','Nombre del Municipio','Nombre de la Colonia','Nombre de la Calle','Tipo de Calle','Tipo de Via','Tipo de Poste','Estado de Poste','Tipo de Luminaria','Estado de Luminaria','Tipo de Carcasa','Tiempo de Uso','Numero de Lamparas','Numero de Medidor','Carga Aceptada','Observaciones','Fotografia','Conciliada','Id del Usuario','Acciones'],
                data_luminaria: '/admin/lista_lum',
                getOnlyOne: '/admin/getluminfo',
                finder: [],
                infoLumin:{
                   values:{
                           coodigo_luminaria:"",
                           fecha:"",
                           hora:"",
                           operador:"",
                           latitud:"",
                           longitud:"",
                           nombre_municipio:"",
                           nombre_colonia:"",
                           nombre_calle:"",
                           tipo_calle:"",
                           tipo_via:"",
                           tipo_poste:"",
                           estado_poste:"",
                           tipo_luminaria:"",
                           estado_luminaria:"",
                           tipo_carcasa:"",
                           tiempo_uso:"",
                           numero_lamparas:"",
                           numero_medidor:"",
                           carga_aceptada:"",
                           observaciones:"",
                           fotografia:"",
                           conciliada:"",
                           users_id:"",
                   },
                },
            },
            methods:{
               getLuminarias: function () {
                   axios.get(this.data_luminaria ).then(response=>{
                       this.finder = response.data;
                   }).catch(error =>{})
               },
               getDatum: function (u) {
                   axios.post(this.getOnlyOne, {coodigo_luminaria: u.coodigo_luminaria}).then(response =>{
                       this.infoLumin.values.coodigo_luminaria = response.data.values[0].coodigo_luminaria;
                       this.infoLumin.values.nombre_municipio = response.data.values[0].nombre_municipio;
                       this.infoLumin.values.nombre_colonia = response.data.values[0].nombre_colonia;
                       this.infoLumin.values.nombre_calle = response.data.values[0].nombre_calle;
                       this.infoLumin.values.tiempo_uso = response.data.values[0].tiempo_uso;
                       this.infoLumin.values.tipo_carcasa = response.data.values[0].tipo_carcasa;
                       this.infoLumin.values.tipo_poste = response.data.values[0].tipo_poste;
                       this.infoLumin.values.tipo_luminaria = response.data.values[0].tipo_luminaria;
                       this.infoLumin.values.estado_carcasa = response.data.values[0].estado_carcasa;
                       this.infoLumin.values.estado_poste = response.data.values[0].estado_poste;
                       this.infoLumin.values.estado_luminaria = response.data.values[0].estado_luminaria;
                       this.infoLumin.values.carga_aceptada = response.data.values[0].carga_aceptada;
                       this.infoLumin.values.numero_lamparas = response.data.values[0].numero_lamparas;
                       this.infoLumin.values.numero_medidor = response.data.values[0].numero_medidor;
                       $("#modaleditarluminaria").modal('show');
                   });
               },
            }
        });
    </script>

@endsection