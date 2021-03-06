@extends('admin.template.main')

@section('title','crear usuario')

@section('content')

    {!! Form::open(['route' => ['users.store'], 'method' => 'POST']) !!}

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="form-group">
        
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Nombre completo', 'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('email','Correo Electronico') !!}
            {!! Form::email('email',null,['class' => 'form-control','placeholder'=>'example@example.com', 'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',['class' => 'form-control','placeholder'=>'******', 'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('type','Tipo') !!}
            {!! Form::select('type',[''=>'seleccione un nivel', 'member' => 'Miembro','admin'=>'Administrador'],null,['class' => 'form-control']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        
        </div>

    {!! Form::close() !!}

@endsection