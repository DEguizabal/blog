@extends('admin.template.main')

@section('title','lista de categorias')

@section('content')

    <a href="{{ route('categories.create') }}" class="btn btn-info">Registrar nuevo</a>

    {!! Form::open(['route' => 'categories.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

        <div class="input-group" >
            {!! Form::text('buscar', null, ['class' => 'form-control','placeholder' => 'Buscar','aria-describedby'=>'search']) !!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! form::close() !!}

    <br><br><br>
    <div class="table table-bordered table-responsive">
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