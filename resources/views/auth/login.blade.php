@extends('layouts.app')

@section('content')
@if ($errors->has('password'))
                             <div class="row">
                                    <div class="col s12 ">
                                      <div class="card  red darken-4 darken-1">
                                        <div class="card-content white-text">
                                          <span class="card-title">Hiba</span>
                                          <p>{{ trans("validation.loginpasserror")}}</p>
                                     </div>
                                    </div>
                                  </div>
                                 </div>
                            @endif 
                            
 @if ($errors->has('email'))
                                 <div class="row">
                                    <div class="col s12 ">
                                      <div class="card red darken-4 darken-1">
                                        <div class="card-content white-text">
                                          <span class="card-title">Hiba</span>
                                          <p>{{trans("validation.loginemailerror")}}</p>
                                     </div>
                                    </div>
                                  </div>
                                 </div>
                            @endif
<div class="valign-wrapper">
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{trans("login.title")}}</span>
                <div class="row">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}">
                                <label data-error="{{ $errors->has('email') ? ' has-error' : '' }}" data-success="Ok" for="email">{{trans("login.User")}}</label>
                            </div>


                            
                                
                            </div>
                        </div>

                            <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label data-error="{{ $errors->has('password') ? ' has-error' : '' }}" data-success="Ok" for="password">{{trans("login.Pass")}}</label>
                            </div>
                       
                              
                            </div>
                        </div>

                        <p>
                        <input type="checkbox" name="remember" id="remember">
                                <label for="remember"> {{trans("login.Remember")}} </label>
                       
                        </p>
                                

                                <button type="submit" class="waves-effect waves-light btn">
                                    {{trans("login.title")}}
                                </button>

                                <a class="waves-effect waves-light btn" href="{{ url('/password/reset') }}">
                                    {{trans("login.ForgotPass")}}
                                </a>
                                {!! csrf_field() !!}
                                </form>


@endsection
