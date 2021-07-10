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
                                <data-table class=" col-12 table table-sm" :data="user" :columns-to-display="gridColumns" :filter-key="searchQuery">
                                    <template slot="Municipio" scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.nombre_municipio }}</div>
                                    </template>
                                    <template slot="Encargado" scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.name }}
                                        @{{ u.entry.a_paterno }} @{{ u.entry.a_materno }}</div>
                                    </template>
                                    <template slot="Correo" scope="u">
                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.email }}</div>
                                    </template>
                                    <template slot="Contraseña" scope="u">
                                        <div class="text-left font-weight-bold pt-2"></div>
                                    </template>
                                    <template slot="Acciones" scope="u">
                                        <div class="text-center">
                                            <button class="btn btn-outline-primary" @click="Actualizar(u.entry)" data-toggle="tooltip" data-placement="bottom" title="Cambiar Contraseña"><i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" @click="Eliminar(u.entry)" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fas fa-times-circle"></i>
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
    @include('admin_usuarios.modaluser') 
	@include('admin_usuarios.modaluser_elimina') 
	@include('admin_usuarios.modaluser_actualiza') 
    </div>

    <script type="text/javascript">
        Vue.use(DataTable);
        new Vue({
            el: "#ind",
            created: function () {
                this.getUsuarios();
            },
            data: {
                searchQuery: '',
                gridColumns: ['Municipio','Encargado','Correo','Acciones'],
                usuario:'/admin/lista_usuarios',
                usuario_mun:'/admin/combobox',
                ingresa_use:'/admin/agregar_usuario',
                vereliminar_use:'/admin/ver_eliminar_user',
                eliminauser:'/admin/acepta_eliminar_user',
                veractualizar_user:'/admin/ver_actualizar_user',
                actualiza_user:'/admin/acepta_actualizar_user',
                user:[],
                datos_combo:[],
                informacion_user: {
                    valores: {
                        id: "",
                        nombre_municipio: "",
                        email: "",
                    },
                },
            },
            methods: {
                getUsuarios: function () {
                    axios.get(this.usuario).then(response => {
                            this.user = response.data;
                        }).catch(error => {
                    });
                },
                Agregar:function () {
                	$('#modaluser').modal('show');
                    axios.get(this.usuario_mun).then(response => {
                        	  this.datos_combo=response.data.mun;
                        }).catch(error => {
                    });
                },
                Guardar:function(){
                    axios.post(this.ingresa_use,{email:this.email,
                                             	 id :this.id,
                                                 password:this.password,
                                                 name:this.name,
                                                 a_paterno:this.a_paterno,
                                                 a_materno:this.a_materno,})
                    .then(response=>{
                        this.email="";
                        this.password="";
                        this.name="";
                        this.a_paterno="";
                        this.a_materno="";
                        this.popToast('Registro exitoso!');
                        $('#modaluser').modal('hide');
                        this.getUsuarios();
                    }).catch(error=>{ });
                },
                Eliminar:function (u) {
                    axios.post(this.vereliminar_use, {id: u.id}).then(response => {
                            this.informacion_user.valores.id = response.data.valores[0].id;
                        $('#modaluser_elimina').modal('show');
                    });
                },
                AceptaEliminar:function () {
                    axios.post(this.eliminauser,  {
                                id: this.informacion_user.valores.id,
                            })
                    .then(response => {
                        this.popToast1('Eliminación correcta!');
                        $('#modaluser_elimina').modal('hide');
                        this.getUsuarios();
                    });
                },
                Actualizar:function (u) {
                    axios.post(this.veractualizar_user, {id: u.id}).then(response => {
                    		this.informacion_user.valores.id = response.data.valores[0].id;
                            this.informacion_user.valores.nombre_municipio = response.data.valores[0].nombre_municipio;
                            this.informacion_user.valores.email = response.data.valores[0].email;
                        $('#modaluser_actualiza').modal('show');
                    });
                },
                AceptaActualizar:function () {
                    axios.post(this.actualiza_user,  {
                                id: this.informacion_user.valores.id,
                                password: this.informacion_user.valores.password,
                            })
                    .then(response => {
                        this.password="";
                        this.popToast('Registro Actualizado!');
                        $('#modaluser_actualiza').modal('hide');
                        this.getUsuarios();
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