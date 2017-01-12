<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Hello László</h1>
@section('menu')
@stop
<p>{{$name}}</p>

   @if($isUserRegistered == true)
        Hello belló!
    @else 
        please register!!!
 @endif
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor

@foreach ($users as $users)
    <p>This is user {{ $users }}</p>
@endforeach

</body>
</html>