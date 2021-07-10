@extends('layouts.app')
@section('content')
    <div class="container" id="ind">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <h5 align="center">Usuarios</h5>
                        </div>
                        <div class="col-md-1 col-sm-1">
                        <button type="button" class="btn btn-outline-success" @click="Agregar()" title="Agregar">+</button>
                        </div>
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
                                <data-table class=" col-12 table table-sm" :data="mun" :columns-to-display="gridColumns" :filter-key="searchQuery">
                                    <template slot="Municipio" scope="munici">
                                        <div class="text-left font-weight-bold pt-2">@{{ munici.entry.nombre_municipio }}</div>
                                    </template>
                                    <template slot="Encargado" scope="munici">
                                        <div class="text-left font-weight-bold pt-2">@{{ munici.entry.name }}
                                        @{{ munici.entry.a_paterno }} @{{ munici.entry.a_materno }}</div>
                                    </template>
                                    <template slot="Correo" scope="munici">
                                        <div class="text-left font-weight-bold pt-2">@{{ munici.entry.email }}</div>
                                    </template>
                                    <template slot="Contraseña" scope="munici">
                                        <div class="text-left font-weight-bold pt-2"></div>
                                    </template>
                                    <template slot="Acciones" scope="munici">
                                        <div class="text-left">
                                            <button class="btn btn-outline-primary" @click="Actualizar(munici.entry)" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" @click="Eliminar(munici.entry)" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fas fa-times-circle"></i>
                                            </button>                                                           
                                        </div>
                                    </template>
                                </data-table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('admin_municipios.modalmunicipios')
    @include('admin_municipios.modaleliminar')
    @include('admin_municipios.modalactualizar')
    </div>

    <script type="text/javascript">
        Vue.use(DataTable);
        new Vue({
            el: "#ind",
            created: function () {
                this.getNombres();
            },
            data: {
                searchQuery: '',
                gridColumns: ['Municipio','Encargado','Correo','Contraseña','Acciones'],
                municipio:'/admin/lista',
                ingresa:'/admin/agregar_municipio',
                vereliminar:'/admin/ver_eliminar',
                eliminamun:'/admin/acepta_eliminar',
                veractualizar:'/admin/ver_actualizar',
                actualizamun:'/admin/acepta_actualizar',
                mun:[],
                informacion: {
                    valores: {
                        id_municipios: "",
                        nom_municipio:"",
                        representante:"",
                        cargo:"",
                    },
                },
            },
            methods: {
                getNombres: function () {
                    axios.get(this.municipio).then(response => {
                            this.mun = response.data;
                        }).catch(error => {
                    });
                },
                Agregar:function () {
                    $('#modalmunicipios').modal('show');
                },
                Guardar:function()
                {
                    axios.post(this.ingresa,{nom_municipio:this.nom_municipio,
                                            representante:this.representante,
                                            cargo:this.cargo,})
                    .then(response=>{
                        this.nom_municipio="";
                        this.representante="";
                        this.cargo="";
                        this.popToast('Registro exitoso!');
                        $('#modalmunicipios').modal('hide');
                        this.getNombres();
                    }).catch(error=>{ });
                },
                Eliminar:function (munici) {
                    axios.post(this.vereliminar, {id: munici.id_municipios}).then(response => {
                            this.informacion.valores.id_municipios = response.data.valores[0].id_municipios;
                        $('#modaleliminar').modal('show');
                    });
                },
                AceptaEliminar:function () {
                    axios.post(this.eliminamun,  {
                                id_mun: this.informacion.valores.id_municipios,
                            })
                    .then(response => {
                        this.popToast1('Eliminación correcta!');
                        $('#modaleliminar').modal('hide');
                        this.getNombres();
                    });
                },
                Actualizar:function (munici) {
                    axios.post(this.veractualizar, {id: munici.id_municipios}).then(response => {
                            this.informacion.valores.id_municipios = response.data.valores[0].id_municipios;
                            this.informacion.valores.nom_municipio = response.data.valores[0].nom_municipio;
                            this.informacion.valores.representante = response.data.valores[0].representante;
                            this.informacion.valores.cargo = response.data.valores[0].cargo;
                        $('#modalactualizar').modal('show');
                    });
                },
                AceptaActualizar:function () {
                    axios.post(this.actualizamun,  {
                                id_mun: this.informacion.valores.id_municipios,
                                nom_mun: this.informacion.valores.nom_municipio,
                                repre: this.informacion.valores.representante,
                                cargo: this.informacion.valores.cargo,
                            })
                    .then(response => {
                        this.popToast('Registro Actualizado!');
                        $('#modalactualizar').modal('hide');
                        this.getNombres();
                    });
                },
                popToast(Mensaje) {
                    const h = this.$createElement;
                    const vNodesMsg = h(
                        'p',
                        { class: ['text-center', 'mb-0'] },
                            [
                            h('b-spinner', { props: { type: 'grow', small: true } }),
                            h('strong', {}, Mensaje),
                            h('b-spinner', { props: { type: 'grow', small: true } })
                            ]
                        );
                    this.$bvToast.toast([vNodesMsg], {
                        solid: true,
                        variant: 'success',
                        toaster:'b-toaster-top-full',
                        noCloseButton: true,
                        noHoverPause:false,
                        autoHideDelay:'2000',
                    });
                },
                popToast1(Mensaje) {
                    const h = this.$createElement;
                    const vNodesMsg = h(
                        'p',
                        { class: ['text-center', 'mb-0'] },
                            [
                            h('b-spinner', { props: { type: 'grow', small: true } }),
                            h('strong', {}, Mensaje),
                            h('b-spinner', { props: { type: 'grow', small: true } })
                            ]
                        );
                    this.$bvToast.toast([vNodesMsg], {
                        solid: true,
                        variant: 'danger',
                        toaster:'b-toaster-top-full',
                        noCloseButton: true,
                        noHoverPause:false,
                        autoHideDelay:'2000',
                    });
                },
            },
        });
    </script>
@endsection