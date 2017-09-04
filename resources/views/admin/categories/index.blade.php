@extends('admin.template.main')

@section('title','lista de categorias')

@section('content')

    <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar nuevo</a>

    <div class="container">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nombre</th>

                <th>Acciones</th>
            </thead>
            <tbody>

                @foreach($categories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        
                        <td>
                            <a href="{{ route('categories.edit',$cat->id)}}" class="btn btn-danger">Editar</a>
                            <a href="{{ route('categories.destroy',$cat->id)}}" onclick="return confirm('¿Está seguro?')"class="btn btn-warning">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    {!! $categories->render() !!}

    </div>

@endsection