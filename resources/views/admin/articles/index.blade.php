@extends('admin.template.main')

@section('title','lista de articulos')

@section('content')

    <a href="{{ route('articles.create') }}" class="btn btn-info">Registrar nuevo</a>

    {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

        <div class="input-group" >
            {!! Form::text('buscar', null, ['class' => 'form-control','placeholder' => 'Buscar','aria-describedby'=>'search']) !!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! form::close() !!}


    <div class="container">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>User</th>

                <th>Acciones</th>
            </thead>
            <tbody>

                @foreach($articles as $art)
                    <tr>
                        <td>{{ $art->id }}</td>
                        <td>{{ $art->title }}</td>
                        <td>{{ $art->category->name }}</td>
                        <td>{{ $art->user->name }}</td>
                        
                        <td>
                            <a href="{{ route('articles.edit',$art->id)}}" class="btn btn-danger">Editar</a>
                            <a href="{{ route('articles.destroy',$art->id)}}" onclick="return confirm('¿Está seguro?')"class="btn btn-warning">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    {!! $articles->render() !!}

    </div>

@endsection