@extends('app')

@section('content')
    {!! Form::open(['url' => '/role_permission']) !!}
    <table class="table table-striped">
        <thead style="background-color: #78909c ;">
        <tr>
            <th>&nbsp;</th>
            <th>Route</th>
            @foreach($roles as $role)
                <th class="text-center">{{ $role->display_name }}</th>
            @endforeach
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th colspan="{{ count($roles) }}">&nbsp;</th>
        </tr>
        </thead>
        <tbody style="background-color: #90a4ae ">

        @foreach($permissions as $permission)
            <tr>
                <td width="150">{{ $permission->display_name }}</td>
                <td><small class="label label-info">{{ $permission->route }}</small></td>
                @foreach ($roles as $role)
                    <td width="150" class="text-center">
                        @if ($permission->hasRole($role->name) && $role->name == 'admin')
                            <p>
                            <input type="checkbox" checked="checked" id="roles[{{$permission->id}}][{{ $role->id}}]" name="roles[{{$permission->id}}][{{ $role->id}}]" value="{{ $permission->id }}"><label for="roles[{{$permission->id}}][{{ $role->id}}]"></label></p>
                        @elseif($permission->hasRole($role->name))
                            <p>
                            <input type="checkbox" checked="checked" id="roles[{{$permission->id}}][{{ $role->id}}]" name="roles[{{$permission->id}}][{{ $role->id}}]" value="{{ $permission->id }}"><label for="roles[{{$permission->id}}][{{ $role->id}}]"></label></p>
                        @else
                        <p>
                            <input type="checkbox" id="roles[{{$permission->id}}][{{ $role->id}}]" name="roles[{{$permission->id}}][{{ $role->id}}]" value="{{ $permission->id }}"><label for="roles[{{$permission->id}}][{{ $role->id}}]"></label></p>
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach

        </tbody>
    </table>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'waves-effect waves-light btn']) !!}
    </div>
    {!! Form::close() !!}

@stop