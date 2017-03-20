@extends('app')

@section('content')
    <table class="bordered">
        <thead>
            <tr style="background-color: #78909C ">
                <td>ID</td>
                <td>Cégnév</td>
                <td>Regisztrációs szám</td>
                <td>Bankszámlaszám</td>
                <td>Adószám</td>
                <td>Nyelv</td>
                <td>Cégtípus</td>
                <td><a class="waves-effect waves-light btn center" href="companyAdd">Cég felvitele</a></td>
            </tr>
        </thead>
        <tbody>   
            @foreach($language as $lang)
            @foreach($lang->company as $langcomp)

            @foreach($companytype as $companytypes)
            @foreach($companytypes->company as $compt)

            <tr>
                <td style="background-color: #90A4AE">{{$langcomp->id}}</td>
                <td style="background-color: #90A4AE">{{$langcomp->name}}</td>
                <td style="background-color: #90A4AE">{{$langcomp->regnr}}</td>
                <td style="background-color: #90A4AE">{{$langcomp->baan}}</td>
                <td style="background-color: #90A4AE">{{$langcomp->taxnumber}}</td>
                <td style="background-color: #90A4AE">{{$lang->displayName}}</td>
                <td style="background-color: #90A4AE">{{$companytypes->name}}</td>
                
                <td style="background-color: #90A4AE">
                <form action="{{route('getdata',$id = $com->id)}}" method="get">
                <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$com->id}}">Adatok</button>
                </form>
                </td>
            </tr>
            @endforeach     
            @endforeach  

            @endforeach     
            @endforeach     
            
              


       
        </tbody>
    </table>

@stop