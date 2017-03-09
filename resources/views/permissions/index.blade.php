@extends('app')

@section('content')

@include('errors.success')
    <table class="table">
        <thead style="background-color: #78909c ;">
        <tr>
            <th>#</th>
            <th>{{trans("roles.DisplayName")}}</th>
            <th>{{trans("roles.RolesName")}}</th>
            <th colspan="2"><a href="{{ URL::route('permissions.create') }}" class="btn btn-primary btn-block">{{trans("roles.Create")}}</a></th>
        </tr>
        </thead>
        <tbody style="background-color: #90a4ae ">
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->display_name }}</td>
                <td>{{ $permission->name }}</td>
                <td width="80"><a class="btn btn-primary" href="{{ URL::route('permissions.edit', $permission->id) }}">{{trans("roles.Edit")}}</a></td>
                <td width="80">{!! Form::open(['route' => ['permissions.update', $permission->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Törlés', ['class' => 'waves-effect waves-light btn', 'onclick' => 'return confirm("Biztos benne?");']) !!}
                    {!!  Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $permissions->render() !!}

@stop