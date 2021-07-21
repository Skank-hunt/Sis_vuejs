@extends('layouts.app')
@section('content')
    <div class="container" id="cont">
        okey
        @foreach($security as $key=>$secu)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col"># de día</th>
                    <th scope="col">Día</th>
                    <th scope="col">Rij</th>
                    <th scope="col">Rim</th>
                    <th scope="col">Supervisión</th>
                    <th scope="col">Foto</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody id="tbody">
                <tr>
                    <th scope="row"> {{ $key+1 }}</th>
                    <td>{{ $secu->dia }}</td>
                    <td>{{ $secu->rij }}</td>
                    <td>{{ $secu->rim }}</td>
                    <td>{{ $secu->supervicion }}</td>
                    <td>{{ $secu->foto }}</td>
                    <td>
                        <input type="submit" name="action_button" id="action_button" class="action_button"
                               data-id="{{ $secu->id_seguridad }}" data-toggle="modal" data-target="#modalsecurity"
                               class="btn btn-primary btn-round" value="+"/>
                    </td>
                    <td>btn2</td>
                </tr>
                </tbody>
            </table>
        @endforeach
        @include('admin_seguridad.modalsecurity')
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#tbody").on('click','input.action_button', function () {
                var id = $(this).data('id')
                console.log('abriste el id '+id)
            })
        })
    </script>
@endsection