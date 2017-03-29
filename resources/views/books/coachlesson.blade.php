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

         <table class="bordered">
             <thead>
             <tr style="background-color: #455a64 ">
                 <th>{{trans("books.lessonCoach")}}</th>
                 <th>{{trans("books.lessonStart")}}</th>
                 <th>{{trans("books.lessonAddress")}}</th>
                 <th>{{trans("books.lessonClass")}}</th>
                 <th></th>
                 <th></th>
                 <th></th>
             </tr>


             </thead>
             <tbody>
               @foreach($books as $room)
                 @foreach($room->roombook as $lesson)
                   @foreach($room->classadd as $address)


                     @if($lesson->user == Auth::user()->email)
               <tr style="background-color: #546E7A">
                           <td>{{$lesson->user}}</td>
                           <td>{{$lesson->date}}</td>
                           <td>{{$address->city}},{{$address->address}}</td>
                           <td>{{$room->name}}</td>



              <td>
              <form action="{{route('userinbook',$lesson->id)}}" method="get">
              <button class="waves-effect waves-light btn" type="submit" value="">{{trans('validation.patitional')}}</button></form>
            </td>
              <td>
              <form action="{{route('editbook',$lesson->id)}}" method="get">
              <button class="waves-effect waves-light btn" type="submit"  value="">{{trans('validation.edit')}}</button></form>
            </td>
              <td>
              <form method="get" action="{{route('deletebook',$lesson->id)}}">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  {!! Form::submit('Törlés', ['class' => 'waves-effect waves-light btn', 'onclick' => 'return confirm("Biztos törli az órát?");']) !!}
              </form>
            </td>
          </tr>
        @endif
      @endforeach
    @endforeach
  @endforeach
            </tbody>
        </table>



    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Még nem vitt fel tartandó órát"])

    @endif



@stop
