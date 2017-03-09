@extends('app')

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
@stop