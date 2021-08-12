@extends('layouts.app')
@section('content')
    <div class="container" id="ind">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11 col-sm-11">
                            <h5 align="center">Seguridad</h5>
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
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Index</th>
                                        <th scope="col">Día</th>
                                        <th scope="col">Rij</th>
                                        <th scope="col">Rim</th>
                                        <th scope="col">Supervisión</th>
                                        <th scope="col">Fotografia</th>
                                        <th scope="col" colspan="2">Acciones</th>

                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                    @foreach($security as $key=>$securedata)
                                        <tr>
                                            <td align="center">{{ $key+1 }}</td>
                                            <td align="center">{{ $securedata->dia }}</td>
                                            <td align="center"><img src="{{ url('files/rij/'.$securedata->rij) }}" alt="parece que no hay foto" style="width: 250px; height: 250px;"></td>
                                            <td align="center"><img src="{{ url('files/rim/'.$securedata->rim) }}" alt="parece que no hay foto" style="width: 250px; height: 250px;"></td>
                                            <td align="center"><img src="{{ url('files/supervision/'.$securedata->supervicion) }}" alt="parece que no hay foto" style="width: 250px; height: 250px;"></td>
                                            <td align="center"><img src="{{ url('files/foto/'.$securedata->foto) }}" alt="parece que no hay foto" style="width: 250px; height: 250px;"></td>
                                            {{--                                        <i class="fas fa-plus"></i>--}}
                                            <td><a class='btn btn-outline-success btn_add' href='#!' data-toggle="modal" data-target="#exampleModal" data-id='{{$securedata->id_seguridad.','.$securedata->dia}}'><i class="fas fa-plus"></i></a></td>
                                            <td><a class='btn btn-outline-danger btn_del' href='#!' data-toggle="modal" data-target="#example2Modal" data-id='{{$securedata->id_seguridad.','.$securedata->dia}}'><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        aqui debe haber una foto

    </div>
    @include('admin_seguridad.modalsecurity')
    @include('admin_seguridad.seguridad_delete')
    <script type="text/javascript">
        $(document).ready(function (){
            $("#body").on('click','a.btn_add',function (){
                // dispost = ''
                let url = window.location+'/'
                let id = $(this).data('id');
                console.log(url)
                let splited = id.split(',')
                let string1 = splited[0]
                let string2 = splited[1]
                console.log('abriste el modal desde el id: '+string1)
                $("#exampleModalLabel").html('Carga de Archivos.')
                $("#titulos").html('Cargando archivos del día '+string2)
                $("#post").attr('action',url+string1)
            })
            $("#body").on('click','a.btn_del',function (){
                let url = window.location+'/'
                let id = $(this).data('id');
                let splited = id.split(',')
                let string1 = splited[0]
                let string2 = splited[1]
                $("#example2ModalLabel").html('Eliminar registros de la fecha: '+string2)
                $("#Advertencia").html('¿Estás seguro de querer eliminar los registros?')
                $("#action2buton").html('Eliminar Registro')
                $("#del").attr('action',url+string1)
                console.log('Vas a eliminar el registro con el id: ' +string1)
            })
        })
    </script>
@endsection