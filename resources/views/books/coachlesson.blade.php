@extends('app')

@section('content')


    @if(count($books) >0)
    <div class="valign-wrapper">
        <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{trans("books.coachLesson")}}</span>
                </div>
        </div>
        </div>
        </div>
<div class="row">
         
            @foreach($books as $room)
            @foreach($room->roombook as $lesson)
            @foreach($room->classadd as $address)
         

       @if($lesson->user == Auth::user()->email)
        <div class="col s12 m4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"></span>
                           <p>{{trans("books.lessonCoach")}}: {{$lesson->user}}<br>
                           {{trans("books.lessonStart")}}: {{$lesson->date}}<br>
                           {{trans("books.lessonAddress")}}: {{$address->city}},{{$address->address}}<br>
                           {{trans("books.lessonClass")}}: {{$room->name}}
                           </p>

            </div>
            <div class="card-action">
         </div></div></div>
           @endif
            @endforeach
            @endforeach
            @endforeach
          

</div>
    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Még nem vitt fel tartandó órát"])

    @endif



@stop