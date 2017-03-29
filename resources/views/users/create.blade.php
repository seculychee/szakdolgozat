@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Probléma a felvitellel..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'users.store']) !!}

    <div class="input-field col s12">
        {!! Form::label('name', 'Név') !!}
        {!! Form::text('name', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::label('password', 'Jelszó') !!}
        {!! Form::password('password', ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        {!! Form::label('password_confirmation', 'Jelszó újra') !!}
        {!! Form::password('password_confirmation', ['class' => 'validate']) !!}
    </div>

    <div class="input-field col s12">
        <label for="">Roles</label>
        @foreach($roles as $role)
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('role[]', $role->id) !!} {{ $role->display_name }}
                </label>
            </div>
        @endforeach
    </div>

    <div class="form-group">
        {!! Form::submit('Létrehozás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>

    {!! Form::close() !!}
@stop