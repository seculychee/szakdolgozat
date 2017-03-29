@extends('layouts.app')

@section('content')

    <table class="table">
        <thead style="background-color: #78909c ;">
        <tr>
            <th>#</th>
            <th>{{trans("roles.DisplayName")}}</th>
            <th>{{trans("roles.RolesName")}}</th>
            <th colspan="2"></a></th>
        </tr>
        </thead>
        <tbody style="background-color: #90a4ae ">
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @foreach($user->roles as $role)
                        <span class="label label-info">{{ $role->name }}</span>
                    @endforeach
                </td>
                <td width="80"><a class="btn btn-primary" href="{{ URL::route('users.edit', $user->id) }}">{{trans("roles.Edit")}}</a></td>
                <td width="80">{!! Form::open(['route' => ['users.update', $user->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Törlés', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Biztos benne?");']) !!}
                    {!!  Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $users->render() !!}

@endsection
