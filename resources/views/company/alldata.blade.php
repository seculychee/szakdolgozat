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

@foreach($address as $add)
@foreach($compa as $com)
 <div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="background-color: #546e7a">
                <div class="panel-heading "><div class="divider"></div>
  <div class="section">
    <h5 class="text-center white-text center">Új terem felvitele</h5>
  </div></div>
                  <div class="panel-body">
                    <div class="container">
                    @foreach($address as $s)
                       <form action="{{route('classAdd',$id = $add->id)}}" method="POST">
                          
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="name" type="text" name="name" class="validate">
                              <label for="name">{{trans("validation.nameClass")}}</label>
                            </div>

                            <div class="input-field col s4">
                              <input id="space" type="text" name="space" class="validate">
                              <label for="space">{{trans("validation.space")}}</label>
                            </div>

                            
                           <input type="hidden" name="_method" value="PUT">
                          <input type="hidden" name="_token" value="{{csrf_token()}}"><br>                   
                        <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="{{trans("registration.title")}}"></a>
                        @endforeach
                     </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <table>
        <thead>
            <tr style="background-color: #455a64 ">
                <td>Company ID</td>
                <td>Cégnév</td>
                <td>Regisztrációs szám</td>
                <td>Address id</td>
                <td>Város</td>
                <td>Cím</td>
                <td>Zip</td>
            </tr>
        </thead>
        <tbody>                           
            
            
            <tr>
                <td style="background-color: #546E7A">{{$com->id}}</td>
                <td style="background-color: #546E7A">{{$com->name}}</td>
                <td style="background-color: #546E7A">{{$com->regnr}}</td>
                @endforeach
                <td style="background-color: #546E7A">{{$add->id}}</td>
                <td style="background-color: #546E7A">{{$add->city}}</td>
                <td style="background-color: #546E7A">{{$add->address}}</td>
                <td style="background-color: #546E7A">{{$add->zip}}</td>
            </tr>
                   
                <form action="{{route('classTo',$id = $add->id)}}" method="post">
            
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="waves-effect waves-light btn center" type="submit" name="id" value="{{$add->id}}">Terem felvitele</button>
             @endforeach 
                </form>
        </tbody>
    </table>


    <table>
        <thead>
            <tr style="background-color: #455a64 ">
                <td>ID</td>
                <td>Teremnév</td>
                <td>Férőhely</td>
            </tr>
        </thead>
        <tbody>                           
            
            @foreach($class as $ss)
            <tr>
                <td style="background-color: #546E7A">{{$ss->id}}</td>
                <td style="background-color: #546E7A">{{$ss->name}}</td>
                <td style="background-color: #546E7A">{{$ss->space}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
@stop