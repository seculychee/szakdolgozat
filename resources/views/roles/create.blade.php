@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)
        <div class="row">
                                    <div class="col s12 ">
                                      <div class="card  red darken-4 darken-1">
                                        <div class="card-content white-text">
                                          <span class="card-title">Hiba</span>
                                          <p><ul>@foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul></p>
                                     </div>
                                    </div>
                                  </div>
                                 </div>

            </ul>
        </div>
    @endif
    <div class="valign-wrapper">
        <div class="row">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Szabály szerkesztés</span>
                    <div class="row">
    {!! Form::open(['route' => 'roles.store']) !!}

    <div class="input-field inline">
        {!! Form::label('name', 'Név') !!}
        {!! Form::text('name', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field inline">
        {!! Form::label('display_name', 'Megjelenítési név') !!}
        {!! Form::text('display_name', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field inline">
        {!! Form::label('description', 'Leírás') !!}
        {!! Form::text('description', null, ['class' => 'validate']) !!}
    </div>

    <div class="input-field inline">
        {!! Form::label('level', 'Level') !!}
        {!! Form::number('level', null, ['class' => 'validate', 'min' => '0']) !!}
    </div>

    <div class="form-group">
        <label for="">Permissions</label>
        @foreach($permissions as $permission)
            <div class="row">

                    {!! Form::checkbox('perms[]', $permission->id) !!}
                <label>{{ $permission->display_name }}</label>
            </div>
        @endforeach
    </div>

    <div class="form-group">
        {!! Form::submit('Létrehozás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>

    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
</div>
@stop
