@extends('admin.template.main')

@section('title','lista de usuarios')

@section('content')

    <a href="{{ route('users.create') }}" class="btn btn-info">Registrar nuevo</a>

    <div class="container">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </thead>
            <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->type == "admin")
                                <span class="label label-danger">{{ $user->type }}</span>
                            @else
                                <span class="label label-primary">{{ $user->type }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-danger">Editar</a>
                            <a href="{{ route('users.destroy',$user->id)}}" onclick="return confirm('¿Está seguro?')"class="btn btn-warning">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    {!! $users->render() !!}

    </div>

@endsection