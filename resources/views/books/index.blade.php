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

    @if(count($company) >0)
    <div class="valign-wrapper">
        <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Felvitt termek</span>
                </div>
        </div>
        </div>
        </div>
<div class="row">
            @foreach($company as $com)
            @foreach($com->sites as $add)
            @foreach($add->classroom as $room)


        <div class="col s12 m4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Felvitt termek</span>
                           <p>Cég: {{$com->companyname}}<br>
                           Város: {{$add->city}}<br>
                           Cím: {{$add->address}}<br>
                           Teremnév: {{$room->name}}<br>
                           Férőhely: {{$room->space}}<br></p>
            </div>
            <div class="card-action">
                <a href="{{route('booksadd',$room->id)}}">
                <button class="waves-effect waves-light btn center" type="submit" name="id" >Óra felvitel</button>
                 </a>
            </div>
        </div>
    </div>

            @endforeach
            @endforeach
            @endforeach

</div>
    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Jelenleg nincs elérhető cég"])

    @endif



@stop
