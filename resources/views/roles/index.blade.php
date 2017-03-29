@extends('layouts.app')

@section('content')

    <table >
        <thead style="background-color: #78909c ;">
        <tr>
            <th>#</th>
            <th>{{trans("roles.DisplayName")}}</th>
            <th>{{trans("roles.RoleName")}}</th>
            <th>{{trans("roles.Level")}}</th>
            <th>{{trans("roles.Permission")}}</th>
            <th colspan="2"><a href="{{ URL::route('roles.create') }}" class="waves-effect waves-light btn">{{trans("roles.Create")}}</a></th>
        </tr>
        </thead>
        <tbody style="background-color: #90a4ae ">
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->level }}</td>
                <td>
                    @foreach($role->perms as $permission)
                        <span class="label label-info">{{ $permission->name }}</span>
                    @endforeach
                </td>
                @if( $role->id == 1)
                <td width="80">Nem módosítható</td>
                <td width="80"></td>
                @endif
                @if( $role->id != 1)
                    <td width="80"><a class="waves-effect waves-light btn" href="{{ URL::route('roles.edit', $role->id) }}">{{trans("roles.Edit")}}</a></td>

                    <td width="80">{!! Form::open(['route' => ['roles.update', $role->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Törlés', ['class' => 'waves-effect waves-light btn', 'onclick' => 'return confirm("Biztos benne?");']) !!}
                        {!!  Form::close() !!}</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $roles->render() !!}

@stop