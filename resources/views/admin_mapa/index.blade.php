@extends('layouts.app')
@section('content')
  <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet">
  <script src="{{ asset('js/leaflet.js') }}"></script>

    <div class="container">
        <div id="myMap" style="height: 600px;"></div>
    </div>

    @foreach ($datos as $item)
        <input type="hidden" name="latitud" id="latitud" value="{{ $item->latitud}}"></td>
        <input type="hidden" name="longitud" id="longitud" value="{{ $item->longitud}}"></td>
    @endforeach

  <script type="text/javascript">
    let myMap = L.map('myMap').setView([19.28786, -99.65324], 13)

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minZoom: 10 ,
        maxZoom: 18,
    }).addTo(myMap);

    var latitud = document.getElementsByName("latitud");
    var longitud = document.getElementsByName("longitud");

    var data = [];
 
    for (var i = 0; i < latitud.length; i++) {
        var lat=latitud[i];
        var long=longitud[i];

        data.push({ cord:[] });
        data[data.length-1].cord.push( {lat: lat.value, long:long.value });

    }

   for (var i = 0; i < data.length; i++) {

       for (let variable of data[i].cord) {
                    marker = new L.marker([variable['lat'],variable['long']])
                    .addTo(myMap);
        }
    }
  </script>
@endsection