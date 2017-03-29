@extends('layouts.app2')

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
                        <span class="card-title">{{trans("books.getallclass")}}</span>
                    </div>
                </div>
            </div>
        </div>

        <table class="bordered">
            <thead>
            <tr style="background-color: #455a64 ">
                <th>{{trans("books.userbook")}}</th>
                <th>{{trans("books.lessonStart")}}</th>
                <th>{{trans("books.lessonClass")}}</th>
                <th>{{trans("books.lessonClass")}}</th>
                <th>{{trans("books.participate")}}</th>

                <th></th>
            </tr>


            </thead>
            <tbody>
            @foreach($books as $user)

                <tr style="background-color: #546E7A">
                    <td>{{$user->user_id}}</td>
                    <td>{{$user->book_id}}</td>
                    <td>itt még nincs kész</td>


                      @if ($user->participate == null)
                      <td>
                      <form action="{{route('participate',$user->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button class="waves-effect waves-light btn" type="submit" name="participate" value="igen">{{trans('books.yes')}}</button></form>
                    </td>
                    <td>
                    <form action="{{route('participate',$user->id)}}" method="post">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button class="waves-effect waves-light btn" type="submit" name="participate" value="nem">{{trans('books.no')}}</button></form>
                  </td>
                @else
                  <td></td>
                  <td>{{$user->participate}}</td>
                @endif
                </tr>

            @endforeach
            </tbody>
        </table>

    @else
        {{-- TODO:MAJD korrekció--}}

        @include("layouts.lightMessage",["message"=>"Jelenleg senki nem jelentkezett"])

    @endif



@stop
