@extends('admin.template.main')

@section('title','lista de tags')

@section('content')

    <a href="{{ route('tags.create') }}" class="btn btn-info">Registrar nuevo</a>

    <div class="container">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nombre</th>

                <th>Acciones</th>
            </thead>
            <tbody>

                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        
                        <td>
                            <a href="{{ route('tags.edit',$tag->id)}}" class="btn btn-danger">Editar</a>
                            <a href="{{ route('tags.destroy',$tag->id)}}" onclick="return confirm('¿Está seguro?')"class="btn btn-warning">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    {!! $tags->render() !!}

    </div>

@endsection