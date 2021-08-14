@extends('layouts.app')
@section('content')
  <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet">
  <script src="{{ asset('js/leaflet.js') }}"></script>

    <div class="container">
        <div id="myMap" style="height: 600px;"></div>
    </div>

{{--  @dd($datos)--}}
    @foreach ($datos as $item)
        <input type="hidden" name="latitud" id="latitud" value="{{ $item->latitud}}"></td>
        <input type="hidden" name="longitud" id="longitud" value="{{ $item->longitud}}"></td>
        <input type="hidden" name="nombre_municipio" id="nombre_municipio" value="{{ $item->nombre_municipio}}"></td>
        <input type="hidden" name="nombre_colonia" id="nombre_colonia" value="{{ $item->nombre_colonia }}"></td>
        <input type="hidden" name="nombre_calle" id="nombre_calle" value="{{ $item->nombre_calle }}"></td>
        <input type="hidden" name="tipo_via" id="tipo_via" value="{{ $item->tipo_via }}"></td>
        <input type="hidden" name="carga_aceptada" id="carga_aceptada" value="{{ $item->carga_aceptada }}"></td>
{{--        <img src="{{ url('files/foto/'.$item->fotografia) }}" alt="imagen no cargada" style="width: 100px; height: 100px;" id="fotografia" name="fotografia">--}}
        <input type="text" id="fotografia" name="fotografia" value="{{ $item->fotografia }}">

    @endforeach

  <script type="text/javascript">

      var urle = window.location.hostname;
      var url = '../files/foto/'

      // console.log(urle+'\n'+url)
    let myMap = L.map('myMap').setView([19.28786, -99.65324], 13)

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minZoom: 10 ,
        maxZoom: 18,
    }).addTo(myMap);

    var latitud = document.getElementsByName("latitud");
    var longitud = document.getElementsByName("longitud");
    var nombre_municipio = document.getElementsByName("nombre_municipio")
    var colonia = document.getElementsByName("nombre_colonia")
    var calle = document.getElementsByName("nombre_calle")
    var via = document.getElementsByName("tipo_via")
    var carga = document.getElementsByName("carga_aceptada")
    var foto = document.getElementsByName('fotografia');

    var data = [];

    for (var i = 0; i < latitud.length; i++) {
        var lat=latitud[i];
        var long=longitud[i];
        var nom_mun = nombre_municipio[i];
        var nom_col = colonia[i]
        var street = calle[i]
        var way = via[i]
        var charge = carga[i]
        var photo = foto[i]/*function () {
            var img = new Image();
            img.src = foto;
            // img.alt = title;
            // img.title = title;
            return img;
        }

        console.log(url+photo().values)
        // data.push((createImage()))*/

        // console.log(photo[i])
        data.push({ cord:[] });
        data[data.length-1].cord.push( {lat: lat.value, long:long.value, nom_mun:nom_mun.value, nom_col:nom_col.value,
            street: street.value, way: way.value, charge: charge.value, photo: photo.value });

    }

   for (var i = 0; i < data.length; i++) {

       for (let variable of data[i].cord) {
           console.log(variable['photo'])

           marker = new L.marker([variable['lat'],variable['long']]).bindPopup('Municipio: '+variable['nom_mun']+'<br>' +
                        'Colonia: '+variable['nom_col']+'<br>Calle: '+variable['street']+'<br>Tipo de Via:'+variable['way']+'' +
                        '<br>Carga Aceptada: '+variable['charge']+'<br>Imagen: '+'<img src="'+url+variable['photo']+'" alt="" style="height: 50px; width: 50px">')
                    .addTo(myMap);
        }
    }
  </script>
@endsection