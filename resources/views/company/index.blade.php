@extends('layouts.app')

@section('content')

  @if ( Session::has('success') )
<div class="vlaign-wrapper">
    <div class="row">
        <div class="col s12">
          <div class="card" style="background-color: #26A69A">
            <div class="card-content white-text">
              <span class="card-title">{{ Session::get('success')}}</span>
              <p></p>
            </div>
          </div>
        </div>
      </div>

@endif




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
                <td></td>
            </tr>
        </thead>
        <tbody>

@foreach($company as $companys)
            <tr>
                <td style="background-color: #90A4AE">{{$companys->id}}</td>
                <td style="background-color: #90A4AE">{{$companys->companyname}}</td>
                <td style="background-color: #90A4AE">{{$companys->regnr}}</td>
                <td style="background-color: #90A4AE">{{$companys->baan}}</td>
                <td style="background-color: #90A4AE">{{$companys->taxnumber}}</td>
                <td style="background-color: #90A4AE">{{$companys->language->displayName}}</td>
                <td style="background-color: #90A4AE">{{$companys->companytype->name}}</td>
                <td style="background-color: #90A4AE">
                <form action="{{route('getdata',$id = $companys->id)}}" method="get">
                <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$companys->id}}">Adatok</button>
                </form>
                </td >
                <td style="background-color: #90A4AE"><form class="center" action="{{route('getedit',$id = $companys->id)}}" method="get">
                <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$companys->id}}">Szekesztés</button>
                </form>
                <form action="{{route('compdelete',$id = $companys->id)}} " method="get">
                <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$companys->id}}">Törlés</button>
                </form>
                </td>
            </tr>

          @endforeach






        </tbody>
    </table>


@stop
