@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">
                <title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="http://maps.google.com/maps/api/js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
                <style type="text/css">
                    #mymap {
                        border:1px solid red;
                        width: 800px;
                        height: 500px;
                    }
                </style>
                <h2>Buscar Parqueo</h2>
                <!--Inicia buscador-->
                <div class="span11">
                    <form method="post" id="geocoding_form">
                        <label for="address">Direccion:</label>
                        <div class="input">
                            <input type="text" id="address" name="address" />
                            <input type="submit" class="btn" value="Search" />
                        </div>
                    </form>
                    <div class="popin">
                        <div id="map"></div>
                    </div>
                </div>
                <!--Termina buscador-->
                <div id="mymap"></div>
                <script type="text/javascript">
                    var locations = <?php print_r(json_encode($locations)) ?>;
                    var mymap = new GMaps({
                        el: '#mymap',
                        lat: -16.5112520,
                        lng: -68.12922518,
                        zoom:15
                    });
                    $.each( locations, function( index, value ){
                        mymap.addMarker({
                            latitude: value.lat,
                            longitude: value.lng,
                            title: value.city,
                            click: function(e) {
                                alert('Esta ubicado en '+value.city);
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
@endsection