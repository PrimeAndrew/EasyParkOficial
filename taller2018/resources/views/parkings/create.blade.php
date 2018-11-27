@extends('layouts.layout')
@section('content')


    <div id="content">
        <!--/siempre aniadir para mapras-->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAKpOvOIRIGs6h9rZQHhJp-piWPx4nJ-60&sensor=TRUE_OR_FALSE">
        </script>
        <script type="text/javascript">var centreGot = false;</script>

        {!!$map['js']!!}
        <!--//-**************-->

          <div class="panel">
                <div class="panel-body">
                        <div class="col-md-12 panel-heading">
                            <h4>Registrar Parqueos</h4>
                        </div>
                </div>
{{--validaciones--}}
              @if(count($errors))
                  <div class="alert alert-danger">
                      <b><p>Por favor introduzca los siguientes errores:</p></b>
                      <button type="button" class="close" data-dismiss="alert">
                          &times;
                      </button>
                      <ul>
                          @foreach($errors->all() as $errors)
                              <li>{{$errors}}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
{{--validaciones--}}
                            <div class="container mb-5" >
                                <form action="{{ route('parkings.store') }}" method="POST">
                                    @csrf

                                        <hr>
                                        @if (Session::has('message'))
                                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                                        @endif
                                        <div class="col-md-6">
                                               {!!$map['html']!!}
                                        <!------->
                                            <br>
                                             <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <label for="Latitud">Latitud:</label>
                                                    <input type="text" class="form-control" name="latitude" id="latitude" value="{{old('latitude')}}" readonly >
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="Longitud">Longitud:</label>
                                                    <input type="text" class="form-control" name="longitud" id="longitud" value="{{old('longitud')}}" readonly>
                                                </div>
                                             </div>
                                        </div>
                                            <!------->


                                        <div class="col-md-6">
                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                    <input type="text" name="parking_name" class="form-text" value="{{old('parking_name')}}" id="parking_name" name="plate_number" >
                                                    <span class="bar"></span>
                                                    <label>Nombre del parqueo:</label>

                                            </div>
                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                    <input type="text" class="form-text" value="{{old('parking_address')}}"  id="parking_address" name="parking_address" >
                                                    <span class="bar"></span>
                                                    <label>Direccion del parqueo</label>
                                            </div>

                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                        <input type="text" class="form-text" id="total_spaces" name="total_spaces" value="{{old('total_spaces')}}" >
                                                        <span class="bar"></span>
                                                        <label>Introduzca el espacio del parqueo</label>
                                             </div>





                                                {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                                    {{--<input type="text" class="form-text" id="open_hour" name="open_hour" required>--}}
                                                    {{--<span class="bar"></span>--}}
                                                    {{--<label>Introduzca la hora que de apertura del parqueo (hh:mm)<i class="fas fa-clock"></i></label>--}}

                                            {{--</div>--}}
                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="time" class="form-text" id="open_hour" name="open_hour"  maxlength="7" pattern="[:|0-9]+" value="{{old('open_hour')}}">
                                                <span class="bar"></span>
                                                {{--<label>Introduzca la hora que de apertura del parqueo</label>--}}
                                                <label>Introduzca la hora que de apertura del parqueo(hh:mm) <i class="fas fa-clock"></i></label>
                                            </div>



                                            {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                                {{--<input type="time" class="form-text" id="departure_hour" name="departure_hour" required maxlength="7" pattern="[:|0-9]+">--}}
                                                {{--<span class="bar"></span>--}}
                                                {{--<label>Hora salida</label>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group form-animate-text">--}}
                                                {{--<input type="text" class="form-text time" required>--}}
                                                {{--<span class="bar"></span>--}}
                                                {{--<label><span class="fa fa-clock-o"></span> Time Picker</label>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group form-animate-text">--}}
                                                {{--<input type="text" class="form-text time" required>--}}
                                                {{--<span class="bar"></span>--}}
                                                {{--<label><span class="fa fa-clock-o"></span> Time Picker</label>--}}
                                            {{--</div>--}}







                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="time" class="form-text" id="close_hour" name="close_hour"  maxlength="7" pattern="[:|0-9]+" value="{{old('close_hour')}}">
                                                <span class="bar"></span>
                                                {{--<label>Introduzca la hora que de cierre del parqueo</label>--}}
                                                <label>Introduzca la hora que de cierre del parqueo(hh:mm) <i class="fas fa-clock"></i></label>
                                            </div>



                                                {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                                    {{--<input type="text" class="form-text" id="latitude" name="latitude"  required>--}}
                                                    {{--<!--value="{}" disabled="true"-->--}}
                                                    {{--<span class="bar"></span>--}}
                                                    {{--<label>Latitud del parqueo</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                                    {{--<input type="text" class="form-text" id="longitud" name="longitud"  required>--}}
                                                    {{--<!--value="{}" disabled="true"-->--}}
                                                    {{--<span class="bar"></span>--}}
                                                    {{--<label>Longitud del parqueo</label>--}}
                                                {{--</div>--}}

                                                <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                                                     <div class="col-sm-5 control-label text-right">
                                                         <label class="control-label text-right">Tarifario del parqueo/mes</label>
                                                     </div>
                                                     <div class="col-sm-7 control-label text-left">

                                                         <select class="form-control" name="id_price_list_fk">
                                                             @foreach($price_lists as $Price_list)
                                                                 <option value="{{ $Price_list['id_price_list'] }}">{{ $Price_list['price'] }}</option>
                                                             @endforeach
                                                         </select>

                                                     </div>
                                               </div>

                                               <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                                                    <div class="col-sm-5 control-label text-right">
                                                    <label class="control-label text-right">Zona de ubicacion del parqueo</label>
                                                    </div>
                                                <div class="col-sm-7 control-label text-left">

                                                    <select class="form-control" name="id_zones_fk">
                                                        @foreach($zones as $zone)
                                                            <option value="{{ $zone['id_zones'] }}">{{ $zone['zone'] }}</option>
                                                        @endforeach
                                                    </select>

                                                  </div>
                                                </div>

                                             </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary mb-5">Enviar</button>
                                        </div>


                                </form>
                            </div>
          </div>

           </div>




        <!--div class="col-md-12 form-group " style="margin-top:50px !important;">
            <div class="col-sm-5 form-group text-right form-animate-text text-right">
                <label class="control-label text-right">Color</label>
            </div>
            <div class="col-sm-7 control-label text-left">
                <input type="color" class="form-text" id="color" name="color" size="10" >
            </div>
        </div-->

        <!--div class="container">
            <div class="row">
                <div class='col-sm-6'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker3').datetimepicker({
                            format: 'LT'
                        });
                    });
                </script>
            </div>
        </div-->

        </div>

@endsection





