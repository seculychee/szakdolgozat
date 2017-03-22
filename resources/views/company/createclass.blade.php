@extends('layouts.app2')


@section('content')

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
  <div class="section">
    <h5 class="text-center white-text center">{{trans("validation.classedit")}}</h5>
  </div></div>
                  <div class="panel-body">
                    <div class="container">
                    @foreach($classroom as $s)
                       <form action="{{route('classupdate',$id = $s->id )}}" method="POST">
                          
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="name" type="text" value="{{$s->name}}" name="name" class="validate">
                              <label for="name">{{trans("validation.nameClass")}}</label>
                            </div>

                            <div class="input-field col s4">
                              <input id="space" type="number" value="{{$s->space}}" name="space" class="validate">
                              <label for="space">{{trans("validation.space")}}</label>
                            </div>

   
                          <input type="hidden" name="_token" value="{{csrf_token()}}"><br>                   
                        <a class="waves-effect waves-light btn"><input type="submit" name="id" value="{{trans("validation.save")}}"></a>
                        @endforeach
                     </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
