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

    <div class="input-field col s12">
        <label for="">Permissions</label>
        @foreach($permissions as $permission)
            <?php $checked = in_array($permission->id, $rolePerms->pluck('id') ->toArray()); ?>
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('perms[]', $permission->id, $checked) !!} {{ $permission->display_name }}
                    </label>
                </div>
        @endforeach
    </div>

    <div class="form-group">
        {!! Form::submit('Módosítás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>

    {!! Form::close() !!}
@stop