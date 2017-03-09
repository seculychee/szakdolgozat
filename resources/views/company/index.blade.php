@extends('app')

@section('content')
    <table class="bordered">
        <thead>
            <tr style="background-color: #78909C ">
                <td>ID</td>
                <td>Cégnév</td>
                <td>Regisztrációs szám</td>
                <td><a class="waves-effect waves-light btn center" href="companyAdd">Cég felvitele</a></td>
            </tr>
        </thead>
        <tbody>                           
            @foreach($company as $com)
            <tr>
                <td style="background-color: #90A4AE">{{$com->id}}</td>
                <td style="background-color: #90A4AE">{{$com->name}}</td>
                <td style="background-color: #90A4AE">{{$com->regnr}}</td>
                
                <td style="background-color: #90A4AE">
                <form action="{{route('getdata',$id = $com->id)}}" method="get">
                 
                <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$com->id}}">Adatok</button>
                    <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$com->id}}">Törlés</button>
                </form>
                </td>
            </tr>
            @endforeach         
       
        </tbody>
    </table>
@stop