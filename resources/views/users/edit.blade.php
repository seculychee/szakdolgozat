@extends('layouts.app2')

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
                <span class="card-title">{{trans("login.title")}}</span>
                <div class="row">
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PATCH']) !!}

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

     <div class="input-field col s12 center">
        Roles
        @foreach($roles as $role)
            <?php $checked = in_array($role->id, $userRoles->pluck('id') ->toArray()); ?>

               <div class="row"> 

                    {!! Form::checkbox('role[]', $role->id, $checked) !!}<label>
                         {{ $role->display_name }}
                    </label>
                </div>
        @endforeach
    </div>

    <div class="row center">
        {!! Form::submit('Módosítás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    {!! Form::close() !!}
@stop