@extends('layouts.app')
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
    <h5 class="text-center white-text center">{{trans("registration.title")}}</h5>
  </div></div>
                <div class="panel-body">
                         <form action="store" method="post">

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">{{trans("validation.password")}}</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="confirm" type="password" name="confirm" class="validate">
          <label for="confirm">{{trans("validation.passwordconf")}}</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s4">
          <input id="firstname" type="text" name="firstname" class="validate">
          <label for="firstname">{{trans("validation.firstname")}}</label>
        </div>
        <div class="input-field col s4">
          <input id="lastname" type="text" name="lastname" class="validate">
          <label for="lastname">{{trans("validation.lastname")}}</label>
        </div>
          <div class="input-field col s4">
          <input id="phonenumber" type="number" name="phonenumber" class="validate">
          <label for="phonenumber">{{trans("registration.Phone")}}</label>
        </div>
      </div>

                            <div class="input-field col s12">
                              <select class="browser-default" name="language_id">
                          <option value="" disabled selected>Válasszon nyelvet</option>
                          @foreach($data as $s)
                            <option value="{{$s->id}}">{{$s->displayName}}</option>
                          @endforeach
                              </select>
                            </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="country" type="text" name="country" class="validate">
          <label for="country">{{trans("validation.country")}}</label>
        </div>
        </div>
            <div class="row">
        <div class="input-field col s4">
          <input id="city" type="text" name="city" class="validate">
          <label for="city">{{trans("validation.city")}}</label>
        </div>
        <div class="input-field col s4">
          <input id="zip" type="text" name="zip" class="validate">
          <label for="zip">{{trans("validation.zip")}}</label>
        </div>
        <div class="input-field col s4">
          <input id="address" type="text" name="address" class="validate">
          <label for="address">{{trans("validation.address")}}</label>
        </div>
      </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="{{trans("registration.title")}}"></a>
 </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
