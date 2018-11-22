<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>EasyPark</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/fullcalendar.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/nouislider.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/ionrangeslider/ion.rangeSlider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/bootstrap-material-datetimepicker.css')}}"/>

    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <!-- end: Css -->


    <link rel="shortcut icon" href="{{asset('asset/img/logomi.png ')}} ">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>

    <![endif]-->
    <!Font  -->
    <!-- start: Javascript -->



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="
    sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body id="mimin" class="dashboard">
<!-- start: Header -->
@include('layouts.navbar')
<!-- end: Header -->
<div class="container-fluid mimin-wrapper">
    <!-- start:Left Menu -->
        @include('layouts.menu')
    <!-- end: Left Menu -->

    <!--El contenido que sera diferente -->
    <!-- start: content -->
        @yield('content')
    <!-- end: content -->
</div>

<!-- start: Javascript -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>


<!-- plugins -->
<script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/fullcalendar.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/jquery.nicescroll.js')}}"></script>
<script src="{{asset('asset/js/plugins/jquery.vmap.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('asset/js/plugins/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('asset/js/plugins/chart.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/chart.min.js')}}"></script>



<!-- custom -->
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="asset/js/main.js"></script>
<script type="text/javascript">
    (function(jQuery){
    (function(jQuery){

        // start: Chart =============

        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {

            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }

            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);

            var innerHtml = '';
            if (undefined !== tooltip.labels && tooltip.labels.length) {
                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                    innerHtml += [
                        '<div class="chartjs-tooltip-section">',
                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                        '</div>'
                    ].join('');
                }
                tooltipEl.html(innerHtml);
            }

            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(21,186,103,0.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(66,69,67,0.3)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }, {
                label: "My Second dataset",
                fillColor: "rgba(21,113,186,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }]
        };

        var doughnutData = [
            {
                value: 300,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 50,
                color: "#1AD576",
                highlight: "#15BA67",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#0F5E36",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];


        var doughnutData2 = [
            {
                value: 100,
                color:"#129352",
                highlight: "#15BA67",
                label: "Alfa"
            },
            {
                value: 250,
                color: "#FF6656",
                highlight: "#FF6656",
                label: "Beta"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#15BA67",
                label: "Gamma"
            },
            {
                value: 40,
                color: "#FD786A",
                highlight: "#15BA67",
                label: "Peta"
            },
            {
                value: 120,
                color: "#15A65D",
                highlight: "#15BA67",
                label: "X"
            }

        ];

        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(21,186,103,0.4)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(21,186,103,0.2)",
                    highlightStroke: "rgba(21,186,103,0.2)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(21,113,186,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(21,113,186,0.2)",
                    highlightStroke: "rgba(21,113,186,0.2)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        window.onload = function(){
            var ctx = $(".doughnut-chart")[0].getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                responsive : true,
                showTooltips: true
            });

            var ctx2 = $(".line-chart")[0].getContext("2d");
            window.myLine = new Chart(ctx2).Line(lineChartData, {
                responsive: true,
                showTooltips: true,
                multiTooltipTemplate: "",
                     maintainAspectRatio: false
                });

                var ctx3 = $(".bar-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx3).Bar(barChartData, {
                     responsive: true,
                        showTooltips: true
                });

                var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
                window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                    responsive : true,
                    showTooltips: true
                });

            };

        //  end:  Chart =============

        // start: Calendar =========
         $('.dashboard .calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2015-02-12',
            businessHours: true, // display business hours
            editable: true,
            events: [
                {
                    title: 'Business Lunch',
                    start: '2015-02-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2015-02-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#20C572'
                },
                {
                    title: 'Conference',
                    start: '2015-02-18',
                    end: '2015-02-20'
                },
                {
                    title: 'Party',
                    start: '2015-02-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    id: 'availableForMeeting',
                    start: '2015-02-11T10:00:00',
                    end: '2015-02-11T16:00:00',
                    rendering: 'background'
                },
                {
                    id: 'availableForMeeting',
                    start: '2015-02-13T10:00:00',
                    end: '2015-02-13T16:00:00',
                    rendering: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2015-02-24',
                    end: '2015-02-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#FF6656'
                },
                {
                    start: '2015-02-06',
                    end: '2015-02-08',
                    overlap: true,
                    rendering: 'background',
                    color: '#FF6656'
                }
            ]
        });
        // end : Calendar==========

        // start: Maps============

          jQuery('.maps').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });

        // end: Maps==============

      })(jQuery);
     </script>
  <!-- end: Javascript -->
<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $("#signupForm").validate({
            errorElement: "em",
            errorPlacement: function(error, element) {
                $(element.parent("div").addClass("form-animate-error"));
                error.appendTo(element.parent("div"));
            },
            success: function(label) {
                $(label.parent("div").removeClass("form-animate-error"));
            },
            rules: {
                validate_firstname: "required",
                validate_lastname: "required",
                validate_username: {
                    required: true,
                    minlength: 2
                },
                validate_password: {
                    required: true,
                    minlength: 5
                },
                validate_confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#validate_password"
                },
                validate_email: {
                    required: true,
                    email: true
                },
                validate_agree: "required"
            },
            messages: {
                validate_firstname: "Please enter your firstname",
                validate_lastname: "Please enter your lastname",
                validate_username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                validate_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                validate_confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                validate_email: "Please enter a valid email address",
                validate_agree: "Please accept our policy"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if (firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });


        $('.mask-date').mask('00/00/0000');
        $('.mask-time').mask('00:00:00');
        $('.mask-date_time').mask('00/00/0000 00:00:00');
        $('.mask-cep').mask('00000-000');
        $('.mask-phone').mask('0000-0000');
        $('.mask-phone_with_ddd').mask('(00) 0000-0000');
        $('.mask-phone_us').mask('(000) 000-0000');
        $('.mask-mixed').mask('AAA 000-S0S');
        $('.mask-cpf').mask('000.000.000-00', {reverse: true});
        $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
        $('.mask-money2').mask("#.##0,00", {reverse: true});
        $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/, optional: true
                }
            }
        });
        $('.mask-ip_address').mask('099.099.099.099');
        $('.mask-percent').mask('##0,00%', {reverse: true});
        $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.mask-fallback').mask("00r00r0000", {
            translation: {
                'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });
        $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

        var options =  {onKeyPress: function(cep, e, field, options){
                var masks = ['00000-000', '0-00-00-00'];
                mask = (cep.length>7) ? masks[1] : masks[0];
                $('.mask-crazy_cep').mask(mask, options);
            }};

        $('.mask-crazy_cep').mask('00000-000', options);


        var options2 =  {
            onComplete: function(cep) {
                alert('CEP Completed!:' + cep);
            },
            onKeyPress: function(cep, event, currentField, options){
                console.log('An key was pressed!:', cep, ' event: ', event,
                    'currentField: ', currentField, ' options: ', options);
            },
            onChange: function(cep){
                console.log('cep changed! ', cep);
            },
            onInvalid: function(val, e, f, invalid, options){
                var error = invalid[0];
                console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
            }
        };

        $('.mask-cep_with_callback').mask('00000-000', options2);

        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

        $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



        var slider = document.getElementById('noui-slider');
        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            range: {
                'min': 0,
                'max': 100
            }
        });

        var slider = document.getElementById('noui-range');
        noUiSlider.create(slider, {
            start: [ 20, 80 ], // Handle start position
            step: 10, // Slider moves in increments of '10'
            margin: 20, // Handles must be more than '20' apart
            connect: true, // Display a colored bar between the handles
            direction: 'rtl', // Put '0' at the bottom of the slider
            orientation: 'vertical', // Orient the slider vertically
            behaviour: 'tap-drag', // Move handle on tap, bar is draggable
            range: { // Slider can select '0' to '100'
                'min': 0,
                'max': 100
            },
            pips: { // Show a scale with the slider
                mode: 'steps',
                density: 2
            }
        });



        $(".select2-A").select2({
            placeholder: "Select a state",
            allowClear: true
        });

        $(".select2-B").select2({
            tags: true
        });

        $("#range1").ionRangeSlider({
            type: "double",
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500
        });

        $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
        $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
        $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
        $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
        $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
        $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


        $(".dial").knob({
            height:80
        });

        $('.dial1').trigger(
            'configure',
            {
                "min":10,
                "width":80,
                "max":80,
                "fgColor":"#FF6656",
                "skin":"tron"
            }
        );

        $('.dial2').trigger(
            'configure',
            {

                "width":80,
                "fgColor":"#FF6656",
                "skin":"tron",
                "cursor":true
            }
        );

        $('.dial3').trigger(
            'configure',
            {

                "width":80,
                "fgColor":"#27C24C",
            }
        );
    });
    $(document).ready(function(){

        $("#signupForm").validate({
            errorElement: "em",
            errorPlacement: function(error, element) {
                $(element.parent("div").addClass("form-animate-error"));
                error.appendTo(element.parent("div"));
            },
            success: function(label) {
                $(label.parent("div").removeClass("form-animate-error"));
            },
            rules: {
                validate_firstname: "required",
                validate_lastname: "required",
                validate_username: {
                    required: true,
                    minlength: 2
                },
                validate_password: {
                    required: true,
                    minlength: 5
                },
                validate_confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#validate_password"
                },
                validate_email: {
                    required: true,
                    email: true
                },
                validate_agree: "required"
            },
            messages: {
                validate_firstname: "Please enter your firstname",
                validate_lastname: "Please enter your lastname",
                validate_username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                validate_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                validate_confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                validate_email: "Please enter a valid email address",
                validate_agree: "Please accept our policy"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if (firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });


        $('.mask-date').mask('00/00/0000');
        $('.mask-time').mask('00:00:00');
        $('.mask-date_time').mask('00/00/0000 00:00:00');
        $('.mask-cep').mask('00000-000');
        $('.mask-phone').mask('0000-0000');
        $('.mask-phone_with_ddd').mask('(00) 0000-0000');
        $('.mask-phone_us').mask('(000) 000-0000');
        $('.mask-mixed').mask('AAA 000-S0S');
        $('.mask-cpf').mask('000.000.000-00', {reverse: true});
        $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
        $('.mask-money2').mask("#.##0,00", {reverse: true});
        $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/, optional: true
                }
            }
        });
        $('.mask-ip_address').mask('099.099.099.099');
        $('.mask-percent').mask('##0,00%', {reverse: true});
        $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.mask-fallback').mask("00r00r0000", {
            translation: {
                'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });
        $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

        var options =  {onKeyPress: function(cep, e, field, options){
                var masks = ['00000-000', '0-00-00-00'];
                mask = (cep.length>7) ? masks[1] : masks[0];
                $('.mask-crazy_cep').mask(mask, options);
            }};

        $('.mask-crazy_cep').mask('00000-000', options);


        var options2 =  {
            onComplete: function(cep) {
                alert('CEP Completed!:' + cep);
            },
            onKeyPress: function(cep, event, currentField, options){
                console.log('An key was pressed!:', cep, ' event: ', event,
                    'currentField: ', currentField, ' options: ', options);
            },
            onChange: function(cep){
                console.log('cep changed! ', cep);
            },
            onInvalid: function(val, e, f, invalid, options){
                var error = invalid[0];
                console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
            }
        };

        $('.mask-cep_with_callback').mask('00000-000', options2);

        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

        $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



        var slider = document.getElementById('noui-slider');
        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            range: {
                'min': 0,
                'max': 100
            }
        });

        var slider = document.getElementById('noui-range');
        noUiSlider.create(slider, {
            start: [ 20, 80 ], // Handle start position
            step: 10, // Slider moves in increments of '10'
            margin: 20, // Handles must be more than '20' apart
            connect: true, // Display a colored bar between the handles
            direction: 'rtl', // Put '0' at the bottom of the slider
            orientation: 'vertical', // Orient the slider vertically
            behaviour: 'tap-drag', // Move handle on tap, bar is draggable
            range: { // Slider can select '0' to '100'
                'min': 0,
                'max': 100
            },
            pips: { // Show a scale with the slider
                mode: 'steps',
                density: 2
            }
        });



        $(".select2-A").select2({
            placeholder: "Select a state",
            allowClear: true
        });

        $(".select2-B").select2({
            tags: true
        });

        $("#range1").ionRangeSlider({
            type: "double",
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500
        });

        $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
        $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
        $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
        $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
        $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
        $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


        $(".dial").knob({
            height:80
        });

        $('.dial1').trigger(
            'configure',
            {
                "min":10,
                "width":80,
                "max":80,
                "fgColor":"#FF6656",
                "skin":"tron"
            }
        );

        $('.dial2').trigger(
            'configure',
            {

                "width":80,
                "fgColor":"#FF6656",
                "skin":"tron",
                "cursor":true
            }
        );

        $('.dial3').trigger(
            'configure',
            {

                "width":80,
                "fgColor":"#27C24C",
            }
        );
    });
</script>
<!-- end: Javascript -->


  </body>
</html>