@extends('layouts.app')

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

        <table class="bordered">
            <thead>
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
              @if($room->user != Auth::user()->email)
                <tr style="background-color: #546E7A">
                    <td>{{$room->user}}</td>
                    <td>{{$room->date}}</td>
                    <td>{{$room->terem->classadd->first()->city}},{{$room->terem->classadd->first()->address}}</td>
                    <td></td>
                    <td>
                        @if($room->userto->find(Auth::user()->id))
                            <p class="white-text">Ide már feliratkoztál</p>
                        @else
                            <form method="post" action="{{route('lessonstart',$room->id)}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                {!! Form::submit('Feliratkozás', ['class' => 'waves-effect waves-light btn', 'onclick' => 'return confirm("Biztos feliratkozik az órára?");']) !!}
                            </form>
                        @endif
                    </td>
                </tr>
              @endif
            @endforeach
            </tbody>
        </table>

    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Jelenleg nincs elérhető óra"])

    @endif



@stop
