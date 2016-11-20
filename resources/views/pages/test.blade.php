<html>
<head>
    <title> �dv�z�lj�k </title>
    @include('layouts.matecss')
    <meta charset="UTF-8">
</head>
<body>
@include('layouts.navbar')
@if(isset($successMsg))
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel green white-text center-align">
                    <h4>{{trans($successMsg)}}</h4>
                </div>
            </div>
        </div>
    </div>
@else
    <form action="{{route("reg")}}" method="post">
        {{csrf_field()}}
        {{-- ERROR LISTING START --}}
        @if (count($errors) > 0)
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel red white-text">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ trans($error) }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{-- ERROR LISTING END --}}
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">{{trans("welcome.reg")}}</span>
                            <div class="row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="firstName" type="text" name="firstName"
                                                   class="validate tooltipped"
                                                   data-position="top" data-delay="50"
                                                   data-tooltip="{!! trans("welcome.vnev") !!}"
                                                   value="{{old("firstName")}}"
                                            >
                                            <label for="firstName">Vezet�kn�v</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="lastName" type="text" name="lastName" class="validate"
                                                   value="{{old("lastName")}}">
                                            <label for="lastName">Keresztn�v</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            {{--<input id="languageCode" type="text" name="languageCode" class="languageCode"
                                                   value="{{old("languageCode")}}">--}}
                                            <select id="languageCode"  name="languageCode">
                                                <option value="" disabled selected>{{trans("registration.SelectLanguage")}}</option>
                                                @php($language = App\Language::all())
                                                @if(count($language) > 0)
                                                    @foreach($language as $lang)
                                                        <option value="{{$lang->code}}">{{$lang->displayName}} - {{$lang->code}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label for="languageCode">Language Code</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="country" type="text" name="country" class="validate"
                                                   value="{{old("country")}}">
                                            <label for="country">Orsz�g</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="street" type="text" name="street" class="validate"
                                                   value="{{old("street")}}">
                                            <label for="street">Utca</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="phone" type="text" name="phone" class="validate"
                                                   value="{{old("phone")}}">
                                            <label for="phone">phone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email" type="email" name="email" class="validate"
                                                   value="{{old("email")}}">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    {{--<div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>--}}
                                    {{-- Szuno password def--}}
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">lock</i>
                                            <input id="password" type="password" name="password"
                                                   value="{{old('email')}}">
                                            <label for="password"
                                                   class="validate">{{trans('publicContent/registration.password')}}<i
                                                        style="color:red">*</i></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">replay</i>
                                            <input id="password_confirmation" type="password"
                                                   name="password_confirmation" value="{{old('email')}}">
                                            <label for="password_confirmation"
                                                   class="validate">{{trans('publicContent/registration.passwordConfirmed')}}
                                                <i style="color:red">*</i></label>
                                        </div>
                                    </div>
                                    {{-- Szuno password def--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col s12 m12 l6" style="width: 520px; height: 500px">
                    <div class="card">
                        <div class="card-image">
                            <img class="hide-on-med-and-down" src="picture/9.jpg">
                            <span class="card-title">Teljes�ts vel�k</span>
                        </div>
                        <div class="card-content">
                            <p>
                                <input type="checkbox" id="test5" name="test5"/>
                                <label for="test5">A <a href="#modal1">regisztr�ci�s felt�teleket</a> elfogadom
                                    .</label></p>
                            <p>
                                <input type="checkbox" id="test6" name="test6"/>
                                <label for="test6"> H�rlev�lre feliratkozom.</label></p>
                        </div>
                        <div class="card-action">
                            <button class="tooltipped btn waves-effect waves-light" style="background-color: #009688"
                                    type="submit"
                                    name="action"
                                    data-position="bottom" data-delay="50"
                                    data-tooltip="{{trans("welcome.regTooltip")}}"
                            >{{trans("welcome.reg")}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Regisztr�ci�s felt�telek</h4>
            <p>Itt meg a t�bbi sz�veg</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
@endif


@include('layouts.matejs')
<script>
    $(document).ready(function () {
        $('.modal').modal();
        $('select').material_select();


    });
</script>
</body>
</html>


