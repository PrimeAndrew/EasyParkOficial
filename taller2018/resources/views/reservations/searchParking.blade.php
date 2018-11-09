@extends('layouts.app')
@section('content')
    <div id="content">
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAKpOvOIRIGs6h9rZQHhJp-piWPx4nJ-60&sensor=TRUE_OR_FALSE">
        </script>
        <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
        <div class="panel">
            <div class="panel-body">
                {!!$map['html']!!}
            </div>
        </div>
    </div>
@endsection