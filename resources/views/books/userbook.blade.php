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
<div class="row">
         
            @foreach($books as $room)
            @foreach($room->kurvavagy as $lesson)
            @foreach($room->classadd as $address)
            @foreach($userbooks as $userbook)

      
        <div class="col s12 m4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"></span>
                           <p>{{trans("books.lessonStart")}}: {{$room->user}}<br>
                           {{trans("books.lessonStart")}}: {{$lesson->date}}<br>
                           {{trans("books.lessonAddress")}}: {{$address->city}},{{$address->address}}<br>
                           {{trans("books.lessonClass")}}: {{$room->name}}
                           </p>

            </div>
            <div class="card-action">
            @if($room->id == $userbook->book_id)
                <p class="white-text">Ide már feliratkoztál</p>
            </div>
        </div>
    </div>
            @else
            <form method="post" action="{{route('lessonstart',$room->id)}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
      
                {!! Form::submit('Feliratkozás', ['class' => 'waves-effect waves-light btn', 'onclick' => 'return confirm("Biztos feliratkozik az órára?");']) !!}
            </div>
        </div>
    </div>

            @endif
            @endforeach
            @endforeach
            @endforeach
            @endforeach
          

</div>
    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Jelenleg nincs elérhető óra"])

    @endif



@stop