@extends('layouts.app')

@section('content')
<link href="{{ asset('css/estilo_graficas.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/data.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                <figure class="highcharts-figure">
                      <div id="container"></div>
                      <p class="highcharts-description"></p>
                      <table id="datatable">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Censadas</th>
                            <th>Conciliadas</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $conteo)
                              <tr>
                                <th>{{$conteo->nombre}}</th>
                                <td>{{$conteo->censadas}}</td>
                                <td>{{$conteo->conciliada}}</td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </figure>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        Highcharts.chart('container', {
          data: {
            table: 'datatable'
          },
          chart: {
            type: 'column'
          },
          title: {
            text: 'Luminarias'
          },
          yAxis: {
            allowDecimals: false,
            title: {
              text: 'Unidades'
            }
          },
          tooltip: {
            formatter: function () {
              return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
            }
          }
        });
</script>
@endsection
