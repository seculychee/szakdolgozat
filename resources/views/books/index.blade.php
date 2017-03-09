@extends('app')

@section('content')

                <a class="waves-effect waves-light btn center" href="booksAdd">Foglalható óra felvitele</a>
    <table class="bordered">
        <thead>
            <tr style="background-color: #78909C ">
                <td>ID</td>
                <td>Cégnév</td>
                <td>addid</td>
                <td>city</td>
                <td>address</td>
                <td>classid</td>
                <td>terem</td>
                <td>ferohely</td>
            </tr>
        </thead>
        <tbody>

            @foreach($company as $com)
            @foreach($address as $add)
            @foreach($class as $room)
            <tr>
                <td style="background-color: #90A4AE">{{$com->id}}</td>
                <td style="background-color: #90A4AE">{{$com->name}}</td>
                <td style="background-color: #90A4AE">{{$add->id}}</td>
                <td style="background-color: #90A4AE">{{$add->city}}</td>
                <td style="background-color: #90A4AE">{{$add->address}}</td>
                <td style="background-color: #90A4AE">{{$room->id}}</td>
                <td style="background-color: #90A4AE">{{$room->name}}</td>
                <td style="background-color: #90A4AE">{{$room->space}}</td>
            </tr>
               @endforeach
            @endforeach
            @endforeach     
       
        </tbody>
    </table>



@stop