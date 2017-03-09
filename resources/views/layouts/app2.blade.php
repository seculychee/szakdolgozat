<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{trans("welcome.fitness")}}</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="/css/sass/materialize.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="/css/sass/md-date-time.css"  media="screen,projection"/>
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">
  <link href="/css/github.min.css" rel="stylesheet">
  <link href="/css/angular-material.min.css" rel="stylesheet"
        type="text/css"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script src="/js/app.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/md-date-time.js"></script>

 <!-- AngularJS Material Dependencies -->
<script src="/js/angular.min.js"></script>
<script src="/js/angular-animate.min.js"></script>
<script src="/js/angular-aria.min.js"></script>
<script src="/js/angular-material.min.js"></script>
<script type="text/javascript"
        src="/js/moment-with-locales.min.js"></script>
<script type="text/javascript"
        src="/js/highlight.min.js"></script>
        
<script type="text/javascript" src="./beautifier.js"></script>
<script type="text/javascript" src="./js/angular-material-datetimepicker.js"></script>
<script type="text/javascript" src="./js/demo.js"></script>

@if (Auth::guest())
@else
    <meta charset="utf-8">
    <title>Üdvözöljük {{ Auth::user()->name }}</title>
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @endif
</head>
<body background="/picture/3.jpg">
@if (Auth::guest())
@include('layouts.navbar2')
 @else
@include('layouts.navbar2')
@endif
@yield('content')
    
   
@yield('afterScript')


</body>
</html>
