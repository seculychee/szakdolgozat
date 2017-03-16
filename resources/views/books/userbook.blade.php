@extends('layouts.app2')

@section('content')


    @if(count($books) >0)
    <div class="valign-wrapper">
        <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{trans("books.getallclass")}}</span>
                </div>
        </div>
        </div>
        </div>

    <table class="bordered" >
        <thead >
          <tr style="background-color: #455a64 ">
              <th>{{trans("books.lessonCoach")}}</th>
              <th>{{trans("books.lessonStart")}}</th>
              <th>{{trans("books.lessonAddress")}}</th>
              <th>{{trans("books.lessonClass")}}</th>
              <th></th>
          </tr>
        </thead>
                <tbody>
            
            @foreach($books as $room)
            @foreach($room->roombook as $lesson)
            @foreach($room->classadd as $address)
            @foreach($userbooks as $userbook)
          <tr style="background-color: #546E7A">
            <td>{{$lesson->user}}</td>
            <td>{{$lesson->date}}</td>
            <td>{{$address->city}},{{$address->address}}</td>
            <td>{{$room->name}}</td>
            <td>
            
            @if(Auth::user()->id == $userbook->user_id)
                <p class="white-text">Ide már feliratkoztál</p>
                @else
                <form method="post" action="{{route('lessonstart',$room->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                {!! Form::submit('Feliratkozás', ['class' => 'waves-effect waves-light btn', 'onclick' => 'return confirm("Biztos feliratkozik az órára?");']) !!}
                </form>
            @endif
            @endforeach
            </td>
          </tr>
          
            @endforeach
            @endforeach
            @endforeach
        </tbody>
      </table>

    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Jelenleg nincs elérhető óra"])

    @endif



@stop