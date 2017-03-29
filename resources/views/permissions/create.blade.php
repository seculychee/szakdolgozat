@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Probléma a felvitellel.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="valign-wrapper">
        <div class="row">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title ">Szabály Létrehozása</span>
                    <div class="row">
    {!! Form::open(['route' => 'permissions.store']) !!}

    <div class="input-field col s12">
        {!! Form::label('name', 'Név') !!}
        {!! Form::text('name', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::label('display_name', 'Megjelenítési név') !!}
        {!! Form::text('display_name', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::label('description', 'Leírás') !!}
        {!! Form::text('description', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::label('route', 'Átirányítás') !!}
        {!! Form::text('route', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::submit('Létrehozás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>

    {!! Form::close() !!}
      </div>
</div>
</div>
</div>
</div>
@stop