@extends('app')

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
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('perms[]', $permission->id) !!} {{ $permission->display_name }}
                </label>
            </div>
        @endforeach
    </div>

    <div class="form-group">
        {!! Form::submit('Létrehozás', ['class' => 'waves-effect waves-light btn']) !!}
    </div>

    {!! Form::close() !!}
@stop