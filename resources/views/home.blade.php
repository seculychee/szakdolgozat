@extends('layouts.app')
@section('content')

<div class="valign-wrapper">
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text center">
                <span class="card-title"><h1>{{trans("welcome.Message")}}</h1></span>
                <div class="row center">
                		<p>{{trans("welcome.logged")}} <br> 
                		{{trans("welcome.thanks")}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
 