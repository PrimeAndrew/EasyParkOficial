@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <div class="col-md-20">
                    <div class="col-md-12 panel">
                        <div class="col-md-12 panel-heading">
                            <h4>Reserva</h4>
                        </div>
                        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">
                                <form class="cmxform" id="signupForm" method="POST" action="" >
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="reservation_entry_date" name="reservation_entry_date" required maxlength="10" pattern="[:|0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>


                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[A-Z0-9]+">
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6" style="margin-top:5px;">
                                            <button class="btn ripple-infinite btn-raised btn-success" type="submit" value="Submit">
                                                <div>
                                                    <span>Reservar</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-md-6" style="margin-top:5px;">
                                            <button class="btn ripple-infinite btn-raised btn-danger" type="reset" value="Submit">
                                                <div>
                                                    <span>Limpiar</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-md-6" style="margin-top:5px;">
                                            <button class="btn ripple-infinite btn-raised btn-danger" type="reset" value="Submit">
                                                <div>
                                                    <span>Limpiar</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection