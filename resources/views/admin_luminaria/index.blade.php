@extends('layouts.app')
@section('content')
    <div class="container" id="ind">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <h5 align="center">Luminarias</h5>
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
                                <data-table class=" col-12 table table-sm" :data="luminaria" :columns-to-display="gridColumns" :filter-key="searchQuery" :items-per-page="5">
                                    <template slot="Codigo Luminaria" scope="data_lum">
                                        <div class="text-left font-weight-bold pt-2">@{{ data_lum.entry.coodigo_luminaria }}</div>
                                    </template>
                                </data-table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
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
                gridColumns: ['Codigo Luminaria'],
                data_luminaria:'/admin/lista_lum',
                luminaria:[],
            },
            methods: {
                getUsuarios: function () {
                    axios.get(this.data_luminaria).then(response => {
                            this.luminaria = response.data;
                        }).catch(error => {
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