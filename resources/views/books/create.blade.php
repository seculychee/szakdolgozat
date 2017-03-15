
<html ng-app="mdDatetimePickerDemo">
<head>
  <title>Fitness</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">
  <link href="/css/github.min.css" rel="stylesheet">
  <link href="/css/angular-material.min.css" rel="stylesheet"
        type="text/css"/>
  <link rel="stylesheet" href="/css/material-datetimepicker.css" type="text/css"/>
  <link type="text/css" rel="stylesheet" href="/css/sass/materialize.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="/css/sass/md-date-time.css"  media="screen,projection"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/md-date-time.js"></script>

</head>
<body background="/picture/3.jpg">

@include('layouts.navbar2')

@if (count($errors) > 0)
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card-panel red white-text">
      <h5>Hiba</h5>
        <ul>
        @foreach($errors->all() as $error)
          <li>{{trans($error)}}</li>
          @endforeach
        </ul>  
      </div>
    </div>
  </div>
</div>
@endif



<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #546e7a">
                <div class="panel-heading "><div class="divider"></div>
  <div class="section"> @foreach($class as $room)
    <h5 class="text-center white-text center">{{$room->name}}</h5>
  </div></div>
                  <div class="panel-body">
                    <div class="container">

                        <form action="{{route('booksplus')}}" method="post">
                          
                          <div class="row">

                                    <div layout-gt-md="row" layout="column" layout-align-gt-md="center center" style="background-color: #546E7A>
                                   <md-input-container flex-gt-md="30">
                                  <label>{{trans("books.date")}}</label>
                                  <input mdc-datetime-picker date="true" time="true" type="text" name="date" id="datetime"
                                  placeholder="Date" show-todays-date
                                  min-date="date"
                                  ng-model="dateTime"  ">
                                </md-input-container>
                                </div>
                                @if (Auth::check())
                                <input type="hidden" name="user" value="{{Auth::user()->email}}">
                                @endif
                          <input type="text" name="classroom_id" value="{{$room->id}}">
                          <input type="hidden" name="_token" value="{{csrf_token()}}"><br>                
                          <input class="waves-effect waves-light btn" type="submit" name="submit"
                                                                               value="{{trans("books.save")}}">
                                                                               
                     </form> @endforeach
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/angular.min.js"></script>
<script src="/js/angular-animate.min.js"></script>
<script src="/js/angular-aria.min.js"></script>
<script src="/js/angular-material.min.js"></script>
<script type="text/javascript"
        src="/js/moment-with-locales.min.js"></script>
<script type="text/javascript"
        src="/js/highlight.min.js"></script>

       
<script type="text/javascript" src="/beautifier.js"></script>
<script type="text/javascript" src="/js/angular-material-datetimepicker.js"></script>
<script type="text/javascript" src="/js/demo.js"></script>

</body>
</html>