@extends('layouts.app')
@section('content')
    <div class="container" id="index_lumi">
        <div class=" col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <h5>Luminarias</h5>
                        </div>
                        <div class="col-md-1 col-sm-1">
                            <button class="btn btn-outline-success" @click="OpenModal()">+</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form" id="search">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="query" v-model="searchQuery" placeholder="Buscar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="tableFixHeadLista">
                                <data-table class="col-12 table table-sm" :data="names" :columns-to-display="gridColumns" :filter-key="searchQuery">
                                    <template slot="coodigo_luminaria" scope="u">
                                        <div class="text-center font-weight-bold pt-2">@{{ u.entry.coodigo_luminaria }}</div>
                                    </template>
{{--                                    <template slot="Municipio" scope="u">--}}
{{--                                        <div class="text-center font-weight-bold pt-2">@{{ u.entry.nombre_municipio }}</div>--}}
{{--                                    </template>--}}
{{--                                    --}}{{--                                    <template slot="created_at" scope="u">--}}
{{--                                    --}}{{--                                        <div class="text-center font-weight-bold pt-2">@{{ u.entry.created_at }}</div>--}}
{{--                                    --}}{{--                                    </template>--}}
{{--                                    --}}{{--                                    <template slot="updated_at" scope="u">--}}
{{--                                    --}}{{--                                        <div class="text-left font-weight-bold pt-2">@{{ u.entry.updated_at }}</div>--}}
{{--                                    --}}{{--                                    </template>--}}
{{--                                    <template slot="Acciones" scope="u">--}}
{{--                                        <div class="text-center">--}}
{{--                                            <button class="btn btn-outline-primary" data-toogle="tooltip" data-placement="bottom" title="Editar nombre del Municipio" @click="FindData(u.entry)"><i class="fas fa-edit"></i></button>--}}
{{--                                            <button class="btn btn-outline-danger" data-toogle="tooltip" data-placement="bottom" title="Eliminar registro del Municipio" @click="deleteNames(u.entry)"><i class="fas fa-times-circle"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </template>--}}



                                </data-table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin_municipios.modaleliminar')
        @include('admin_municipios.modalmunicipios')
        @include('admin_municipios.modalactualizar')
    </div>

    <script type="text/javascript">
        Vue.use(DataTable);

        new Vue({
            el: "#index_mun",
            created: function () {
                this.getLumins();
            },
            data:{
                searchQuery: '',
                gridColumns: ['coodigo_luminaria'],
                urlLumin: '/admin/luminarias',
                // getItemtoDelete: '/admin/findOne',
                // deleteRecord: '/admin/deleteOne',
                // addingRecord: '/admin/addOne',
                // findItem: '/admin/list_data',
                // updateItem: '/admin/update_data',
                names: [],
                lumiNames:{
                    values:{
                        'coodigo_luminaria' : "",
                    },
                },
            },
            methods:{
                getLumins: function (){
                    axios.get(this.urlLumin).then(response => {
                        this.names = response.data;
                    }).catch(error =>{

                    });
                },
                deleteNames: function (u) {
                    axios.post(this.getItemtoDelete,{id: u.id}).then(response=>{
                        this.infoNames.values.id = response.data.values[0].id;
                        //aqui va el modal pa eliminar
                        $('#modaleliminar').modal('show')
                    })
                },
                removeData: function () {
                    axios.post(this.deleteRecord,{
                        id: this.infoNames.values.id,
                    })
                        .then(response => {
                            this.popToast1('Eliminación Correcta!');
                            $("#modaleliminar").modal('hide');
                            this.getNames();
                        })
                },
                OpenModal:function () {
                    $("#modalmunicipios").modal('show')
                },
                Storing:function () {
                    axios.post(this.addingRecord,{
                        nombre_municipio: this.nombre_municipio
                    }).then(response=>{
                        this.nombre_municipio = '';
                        this.popToast('Registro Exitoso!');
                        $("#modalmunicipios").modal('hide');
                        this.getNames()
                    }).catch(error =>{

                    })
                },
                FindData: function(u){
                    axios.post(this.findItem, {id: u.id}).then(response =>{
                        this.infoNames.values.id = response.data.values[0].id;
                        this.infoNames.values.nombre_municipio = response.data.values[0].nombre_municipio;
                        $("#modalactualizar").modal('show');
                    })

                },

                updateData: function () {
                    axios.post(this.updateItem,{
                        id: this.infoNames.values.id,
                        nombre_municipio: this.infoNames.values.nombre_municipio,
                    })
                        .then(response =>{
                            this.nombre_municipio = '';
                            $("#modalactualizar").modal('hide');
                            this.getNames();
                        })
                },

                popToast(Mensaje) {
                    const h = this.$createElement;
                    const vNodeMsg = h(
                        'p',{
                            class: ['text-center','mb-0']
                        },[
                            h('b-spinner',{ props: { type: 'grow', small: 'true' }}),
                            h('strong',{},Mensaje),
                            h('b-spinner',{ props: { type: 'grow', small: 'true' }}),
                        ]
                    );
                    this.$bvToast.toast([vNodeMsg],{
                        solid: true,
                        variant : 'succedd',
                        toaster: 'b-toaster-top-full',
                        noCloseButton: true,
                        noHoverPause: false,
                        autoHideDelay:'2000',
                    });

                },
                popToast1(Mensaje) {
                    const h = this.$createElement;
                    const vNodesMsg = h(
                        'p',
                        {class: ['text-center', 'mb-0']},
                        [
                            h('b-spinner', {props: {type: 'grow', small: true}}),
                            h('strong', {}, Mensaje),
                            h('b-spinner', {props: {type: 'grow', small: true}})
                        ]
                    );
                    this.$bvToast.toast([vNodesMsg], {
                        solid: true,
                        variant: 'danger',
                        toaster: 'b-toaster-top-full',
                        noCloseButton: true,
                        noHoverPause: false,
                        autoHideDelay: '2000',
                    });
                }
            }
        })
    </script>
@endsection