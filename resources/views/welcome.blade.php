<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
{{--    <h1>Laravel Broadcast Redis Socket io Tutorial - ItSolutionStuff.com</h1>--}}

    <div id="notification"></div>
</div>
</body>

<script>
    window.laravel_echo_port='{{env("LARAVEL_ECHO_PORT")}}';
</script>
{{--<script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>--}}
{{--<script src="{{ url('/js/laravel-echo-setup.js') }}" type="text/javascript"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.1/socket.io.js" integrity="sha512-AcZyhRP/tbAEsXCCGlziPun5iFvcSUpEz2jKkx0blkYKbxU81F+iq8FURwPn1sYFeksJ+sDDrI5XujsqSobWdQ==" crossorigin="anonymous"></script>
<script type="text/javascript">
    let i = 0;
    // window.Echo.channel('tracker-user-channel')
    //     .listen('.UserEvent', (data) => {
    //         i++;
    //         $("#notification").append('<div class="alert alert-success">'+i+'.'+data.title+'</div>');
    //     });
    var socket = io('http://localhost:3000');
    socket.on("tracker-user-channel:App\\Events\\SendMessage", function(message){
        i++;
        // increase the power everytime we load test route
        $('#notification').append('<div class="alert alert-success">'+i+'.'+ message.data.greeting +'</div>');
    });
</script>
</html>
