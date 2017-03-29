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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="background-color: #546e7a">
                    <div class="panel-heading ">
                        <div class="divider"></div>
                        <div class="section">
                            <h5 class="text-center white-text center">{{trans("company.company")}}</h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                            <form action="{{route('comp')}}" method="POST">

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="name" type="text" name="companyname" class="validate">
                                        <label for="name">{{trans("validation.name")}}</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="regnr" type="text" name="regnr" class="validate">
                                        <label for="regnr">{{trans("validation.regnr")}}</label>
                                    </div>
                                    {{-- TODO: baan kezelés--}}
                                    <div class="input-field col s6 ">
                                        <input id="baan" type="text" name="baan" class="validate">
                                        <label for="baan">{{trans("validation.baan")}}</label>
                                    </div>
                                      <div class="input-field col s6 ">
                                        <input id="taxnumber" type="text" name="taxnumber" class="validate">
                                        <label for="taxnumber">{{trans("validation.taxnumber")}}</label>
                                    </div>
                                    {{-- ########## --}}
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

                                <div class="row">
                                    <div class="input-field col s6">
                                        <select class="browser-default" name="companytype_id">
                                            <option value="" disabled selected>{{trans("validation.chooseCompanytype")}}</option>
                                            @foreach($data as $s)
                                                <option value="{{$s->id}}">{{$s->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-field col s6">
                                        <select class="browser-default" name="language_id">
                                            <option value="" disabled selected>{{trans("validation.chooseLanguage")}}</option>
                                            @foreach($dataa as $s)
                                                <option value="{{$s->id}}">{{$s->displayName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="class" type="text" name="name" class="validate">
                                        <label for="class">{{trans("validation.nameClass")}}</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="space" type="number" name="space" class="validate">
                                        <label for="space">{{trans("validation.space")}}</label>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
                                <a class="waves-effect waves-light btn center"><input type="submit" name="submit"
                                                                               value="{{trans("validation.save")}}"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
