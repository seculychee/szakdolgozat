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
                    <span class="card-title">Jogosultság szerkesztés</span>
                    <div class="row">
    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PATCH']) !!}

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
        {!! Form::label('level', 'Level') !!}
        {!! Form::text('level', null, ['class' => 'validate', 'disabled' => 'disabled']) !!}
        {!! Form::hidden('level', $role->level) !!}
    </div>


      Permission
    
        @foreach($permissions as $permission)
            <?php $checked = in_array($permission->id, $rolePerms->pluck('id') ->toArray()); ?>
                <div class="row">

                        {!! Form::checkbox('perms[]', $permission->id, $checked) !!}
                    <label>{{ $permission->display_name }}</label>
                </div>

        @endforeach
    </div>

    <div class="form-group">
        {!! Form::submit('Módosítás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>

    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
</div>
@stop
