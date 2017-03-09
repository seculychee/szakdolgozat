<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{trans("welcome.fitness")}}</title>

     @include('layouts.matejs')
@include('layouts.matecss')
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
<body background="picture/3.jpg">

@if (Auth::guest())
@include('layouts.navbar')
 @else
@include('layouts.navbar')
@endif
@yield('content')
    

    <script src="/js/app.js"></script>
</body>
</html>
